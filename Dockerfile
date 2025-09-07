FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy the entire application first
COPY ./laravel-app .

# Set COMPOSER_ALLOW_SUPERUSER to avoid warnings
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install dependencies (but don't fail if artisan commands fail)
RUN composer install --no-dev --optimize-autoloader --no-scripts || true
RUN composer dump-autoload --optimize

RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www \
    && chmod -R 775 /var/www/storage \
    && chmod -R 775 /var/www/bootstrap/cache

EXPOSE 8000

# Create startup script that ensures vendor exists
RUN echo '#!/bin/bash\nif [ ! -d "/var/www/vendor" ] || [ ! -f "/var/www/vendor/autoload.php" ]; then\n  echo "Installing composer dependencies..."\n  composer install --no-dev --optimize-autoloader --no-scripts\nfi\nphp artisan serve --host=0.0.0.0 --port=8000' > /start.sh && chmod +x /start.sh

CMD ["/start.sh"]

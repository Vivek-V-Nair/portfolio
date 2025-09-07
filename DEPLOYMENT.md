# InfinityFree Laravel Portfolio

## Requirements
- PHP 8.0+
- MySQL Database
- Composer

## Setup Instructions
1. Upload all files to public_html folder
2. Create MySQL database in InfinityFree control panel
3. Update .env file with database credentials
4. Run: composer install --no-dev
5. Run: php artisan key:generate
6. Run: php artisan config:cache

## File Structure for InfinityFree
- All Laravel files go in public_html/
- public/ folder contents should be in the root of public_html/
- Move index.php and .htaccess from public/ to root

## Database Setup
Create these tables after uploading:
- php artisan migrate

## Environment Variables
Update .env file with your InfinityFree database details.

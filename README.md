# Laravel Portfolio App (Dockerized)

This project is a Laravel application set up to host your portfolio, running in Docker containers for easy local development.

## Features
- Laravel 12.x
- PHP 8.2 (FPM)
- MySQL 8
- Nginx
- Composer
- Docker Compose for orchestration

## Getting Started

### Prerequisites
- [Docker Desktop](https://www.docker.com/products/docker-desktop/) installed

### Setup
1. Clone this repository or copy the files to your project directory.
2. Open a terminal in the project root.
3. Run:
   ```powershell
   docker-compose up --build
   ```
4. Visit [http://localhost:8080](http://localhost:8080) in your browser.

### Database
- MySQL is available at `localhost:3306` (user: `laravel`, password: `secret`, database: `laravel`).
- Update your `.env` file in `laravel-app` if you want to change database settings.

### Useful Commands
- To run artisan commands:
  ```powershell
  docker-compose exec app php artisan migrate
  ```
- To install new Composer packages:
  ```powershell
  docker-compose exec app composer require <package>
  ```

## Customization
- Place your portfolio code in the `laravel-app` directory.
- Edit routes, controllers, and views as needed.

## Stopping the App
```powershell
docker-compose down
```

---

This setup is ready for you to build and deploy your portfolio using Laravel!

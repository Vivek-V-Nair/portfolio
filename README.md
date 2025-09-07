# Laravel Portfolio

A professional portfolio website built with Laravel and Docker, showcasing skills and experience for Software Engineering Dual Study Programme applications.

## 🚀 Features

- **Dark Mode Design** - Modern, professional dark theme
- **Responsive Layout** - Works perfectly on all devices
- **Docker Setup** - Easy development environment
- **Laravel Framework** - Robust PHP framework
- **Professional Sections** - Profile, Skills, Education, Experience, etc.

## 🛠️ Tech Stack

- **Backend:** Laravel 12.x
- **Frontend:** HTML5, Tailwind CSS, Font Awesome
- **Database:** MySQL 8.0
- **Containerization:** Docker & Docker Compose
- **Server:** Laravel Artisan (Development)

## 📋 Quick Start

### Prerequisites
- [Docker Desktop](https://www.docker.com/products/docker-desktop/)

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Vivek-V-Nair/portfolio.git
   cd portfolio
   ```

2. Start the application:
   ```bash
   docker-compose -f docker-compose-simple.yml up -d
   ```

3. Visit your portfolio:
   ```
   http://localhost:8080
   ```

## 🐳 Docker Services

- **Laravel App:** Port 8080 (Artisan server)
- **MySQL Database:** Port 3307
- **Simple Setup:** Single command deployment

## 📁 Project Structure

```
portfolio/
├── laravel-app/           # Laravel application
│   ├── resources/views/   # Blade templates
│   ├── public/           # Static assets
│   └── routes/           # Application routes
├── docker-compose-simple.yml  # Simplified Docker setup
├── Dockerfile.simple     # Docker configuration
└── README.md             # This file
```

## 🎨 Portfolio Sections

- **Header** - Profile photo and contact information
- **Profile** - Professional summary
- **About Me** - Personal motivation and goals
- **Skills** - Technical and soft skills
- **Education** - Academic background
- **Work Experience** - Projects and experience
- **Languages** - Language proficiencies
- **Interests** - Personal interests and hobbies

## 🔧 Development

### Adding Content
Edit the portfolio content in:
```
laravel-app/resources/views/portfolio.blade.php
```

### Database Access
- **Host:** localhost
- **Port:** 3307
- **Database:** laravel
- **Username:** laravel
- **Password:** secret

### Useful Commands

```bash
# Stop containers
docker-compose -f docker-compose-simple.yml down

# View logs
docker-compose -f docker-compose-simple.yml logs

# Access Laravel container
docker-compose -f docker-compose-simple.yml exec app bash

# Run Artisan commands
docker-compose -f docker-compose-simple.yml exec app php artisan <command>
```

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 👤 Contact

**Vivek Venugopal Nair**
- Email: vivekrokzz01@gmail.com
- Phone: +49 17624302844
- Location: Berlin, Germany

---

*Application for Software Engineering Dual Study Programme*

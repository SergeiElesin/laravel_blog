# Laravel Blog

A blogging platform built with Laravel, offering a clean and modern architecture for content management.

## 🚀 Features

- User authentication (registration, login, logout)
- Create, edit, and delete blog posts
- Commenting system
- Tagging and categorization
- Responsive design with Bootstrap
- Admin panel for managing content and users

## 🛠️ Technologies Used

- Laravel 8.x
- PHP 7.4+
- MySQL or PostgreSQL
- Blade templating engine
- Bootstrap 4
- Composer
- NPM & Laravel Mix

## 📦 Installation

### Prerequisites

- PHP 7.4 or higher
- Composer
- Node.js and NPM
- MySQL or PostgreSQL

### Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/SergeiElesin/laravel_blog.git
   cd laravel_blog
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install JavaScript dependencies:
   ```bash
   npm install
   ```

4. Copy the example environment file and configure it:
   ```bash
   cp .env.example .env
   ```

5. Generate the application key:
   ```bash
   php artisan key:generate
   ```

6. Configure your database settings in the `.env` file.

7. Run database migrations:
   ```bash
   php artisan migrate
   ```

8. (Optional) Seed the database with sample data:
   ```bash
   php artisan db:seed
   ```

9. Compile the assets:
   ```bash
   npm run dev
   ```

10. Start the development server:
    ```bash
    php artisan serve
    ```

## 📄 License

This project is open-source and available under the [MIT license](LICENSE).

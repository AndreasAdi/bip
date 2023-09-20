# Bismacindo Web

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D%208.2-8892BF.svg)](https://www.php.net/releases/8_2_0.php)
[![Laravel Version](https://img.shields.io/badge/laravel-%5E10.0-red.svg)](https://laravel.com)

## Installation

-   **PHP**: This project requires PHP version 8.2 or higher. You can download PHP from [php.net](https://www.php.net/downloads.php).

-   **Composer**: Composer is a PHP dependency manager and is required to install PHP dependencies. You can download Composer from [getcomposer.org](https://getcomposer.org/).

-   **Node.js and npm**: This project also uses Node.js and npm for frontend asset compilation. You can download Node.js and npm from [nodejs.org](https://nodejs.org/).

-   **MySQL**: This project uses MySQL as the database system. You can download MySQL from [mysql.com](https://dev.mysql.com/downloads/mysql/).

1.  **Clone the repository:**

    ```bash
    git clone https://github.com/AndreasAdi/bip.git
    ```

2.  Navigate to the project folder:
    ```bash
    cd bip
    ```
3.  Install composer dependencies:
    ```
    composer install
    ```
4.  Copy .env.example to .env and configure your environment variables :

    ```
    cp .env.example .env
    ```

5.  Generate a new application key:
    ```
    php artisan key:generate
    ```
6.  Run database migrations:
    ```
    php artisan migrate
    ```
7.  Install npm dependencies and compile assets

    ```
    npm install && npm run dev
    ```

8.  Start the development server:
    ```
    php artisan serve
    ```
9.  Visit your application in the browser:
    ```
    http://localhost:8000
    ```

##

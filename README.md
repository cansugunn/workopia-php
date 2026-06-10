# Workopia PHP

A job listing web application built with PHP and MySQL. Users can browse job listings, create new listings, manage their own posts, and authenticate through a simple user system.

## Features

* User registration and login
* Create job listings
* Edit and delete listings
* View all available jobs
* Listing details page
* Authentication and authorization
* Custom routing system
* Session management
* PDO database integration

## Technologies

* PHP
* MySQL
* Composer
* PDO
* HTML
* Tailwind CSS

## Installation

Clone the repository:

```bash
git clone https://github.com/your-username/workopia-php.git
```

Navigate to the project directory:

```bash
cd workopia-php
```

Install dependencies:

```bash
composer install
```

Create a MySQL database:

```sql
CREATE DATABASE workopia;
```

Import the database schema and sample data.

Update your database configuration:

```php
config/db.php
```

Example:

```php
return [
    'host' => 'localhost',
    'port' => 3306,
    'dbname' => 'workopia',
    'username' => 'root',
    'password' => ''
];
```

Start the development server:

```bash
php -S localhost:8000 -t public
```

Open your browser and visit:

```text
http://localhost:8000
```

## Project Structure

```text
App/
├── controllers/
└── views/

Framework/
├── Authorization.php
├── Database.php
├── Router.php
├── Session.php
└── Validation.php

config/
└── db.php

public/
├── .htaccess
└── index.php

routes.php
helpers.php
composer.json
```

## License

This project is licensed under the MIT License.

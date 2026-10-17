# CIT3102-M5-COOKIE
Midterm Activity
# CIT 3102: Systems Integration and Architecture (Midterms - Activity 2)

# Project Information
★ Cookie Shop API<br>
Name: Elaiza Jade Bernardino<br>
Section: IT3E<br>
Chosen Resource: Cookies<br>

<p align="justify">
This project is a REST API built with Laravel that allows users to register, log in, and manage cookie shop inventory records. It supports creating, retrieving, updating, deleting, and filtering cookies by flavor and category. Laravel Sanctum is used to protect routes that require authentication.
</p>

# Setup Procedure
★ Requirements<br>
- Laravel installer<br>  				
- PHP<br>  
- SQLite<br>  
- Bruno for testing<br>  
- Composer<br>

### ★ Step-by-Step Process<br>

1. Install Laravel For Windows:

```bash
# Run as administrator...
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.5'))
```
2. Install Laravel Composer:

```bash
composer global require laravel/installer
```
3. Create an application:

```bash
laravel new example-app
```
4. Navigate to the project directory:

```bash
cd cookie-shop
```
5. Navigate to the project directory:

```bash
cd cookie-shop
```
6. Install API support:

```bash
php artisan install:api
```
7. Create the Book model and migration file:

```bash
php artisan make:model cookies -m
```
8. Run the database migrations:

```bash
php artisan migrate
```
9. Create the API controller for Cookies:

```bash
php artisan make:controller CookieController --api
```
10. Start the Laravel development server:
```bash
php artisan serve
```
11. Send API requests via Bruno at:
```bash
http://127.0.0.1:8000
```

# API ROUTES

| # | Request | Expected Status | Description |
| :--- | :--- | :---: | :--- |
| 1 | `POST /api/register` | `201` | Register user |
| 2 | `POST /api/login` | `200` | Log in user |
| 3 | `GET /api/cookies` | `401` | Unauthorized check |
| 4 | `GET /api/cookies` | `200` | Fetch Item (Authenticated) |
| 5 | `POST /api/cookies` | `201` | Create cookie Item |
| 6 | `POST /api/cookies` | `422` | Validation error |
| 7 | `GET /api/cookies/1` | `200` | Fetch single cookie Item |
| 8 | `GET /api/cookies/99999` | `404` | Check Non-existent Item |
| 9 | `PUT /api/cookies/1` | `200` | Update Item |
| 10 | `DELETE /api/cookies/1` | `204` | Delete Item |

# API TESTING

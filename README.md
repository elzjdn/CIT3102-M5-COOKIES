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

### 1. User Registration

- *Method:* POST
- *Endpoint:* /api/register
- *Expected Output:* 201 Created
- *Description:* Register a new user account.

![User registration request and response](Images/ACT%20IMAGE/REGISTER.png)

### 2. User Login

- *Method:* POST
- *Endpoint:* /api/login
- *Expected Output:* 200 OK
- *Description:* Authenticate user and generate an access token.

![User login request and response](Images/ACT%20IMAGE/LOGIN.png)

### 3. Unauthorized Request

- *Method:* GET
- *Endpoint:* /api/cookies
- *Expected Output:* 401 Unauthorized
- *Description:* Attempt to access endpoint without a bearer token.

![Request without an access token](Images/ACT%20IMAGE/NO%20TOKEN.png)

### 4. Retrieve All Cookies

- *Method:* GET
- *Endpoint:* /api/cookies
- *Expected Output:* 200 OK
- *Description:* Retrieve the list of all cookies using a valid token.

![Retrieve all cookies](Images/ACT%20IMAGE/WITH%20TOKEN.png)

### 5. Create a Cookie

- *Method:* POST
- *Endpoint:* /api/cookies
- *Expected Output:* 201 Created
- *Description:* Add a new cookie record with valid input data.

![Create a cookie](Images/ACT%20IMAGE/VALID%20DATA.png)

### 6. Validation Error

- *Method:* POST
- *Endpoint:* /api/cookies
- *Expected Output:* 422 Unprocessable Content
- *Description:* Test validation rules with missing required fields.

![Validation error for missing required fields](Images/ACT%20IMAGE/MISSING%20FIELD.png)

### 7. Retrieve One Cookie

- *Method:* GET
- *Endpoint:* /api/cookies/{cookie}
- *Expected Output:* 200 OK
- *Description:* Fetch a single existing cookie record by its ID.

![Retrieve a single cookie](Images/ACT%20IMAGE/EXISTING%20RECORD.png)

### 8. Nonexistent Cookie

- *Method:* GET
- *Endpoint:* /api/cookies/99999
- *Expected Output:* 404 Not Found
- *Description:* Request a cookie record that does not exist in the database.

![Request for a nonexistent cookie](Images/ACT%20IMAGE/NOT%20EXISTING.png)

### 9. Update a Cookie

- *Method:* PUT
- *Endpoint:* /api/cookies/{cookie}
- *Expected Output:* 200 OK
- *Description:* Modify an existing cookie record's details.

![Update a cookie](Images/ACT%20IMAGE/UPDATE.png)

### 10. Delete a Cookie

- *Method:* DELETE
- *Endpoint:* /api/cookies/{cookie}
- *Expected Output:* 204 No Content
- *Description:* Remove an existing cookie record from the database.

![Delete a cookie](Images/ACT%20IMAGE/DELETE.png)

# Why does DELETE return 204 and not 200?

<p align="justify">
DELETE returns 204 because 204 means “No Content.” The delete worked, but there is nothing to send back. After a cookie is deleted, it is gone, so there is no data to show. A 200 usually comes with a message or data, and that would be pointless here. The empty reply still tells the client that the delete worked.
</p>

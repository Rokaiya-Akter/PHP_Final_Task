# PHP_Final_Task
# PHP User Class

This project provides a simple PHP class for user authentication and password management using PDO and secure password hashing.

## Features

- ✅ User Registration (with password hashing)
- ✅ User Login (with password verification)
- ✅ Change Password (secure update)

## Requirements

- PHP 7.4 or higher
- MySQL/MariaDB
- PDO extension enabled

## Usage

1. Create a `users` table with `username` and `password` fields.
2. Establish a PDO database connection.
3. Use the `User` class to register, log in, or change passwords.

```php
require_once 'User.php';
$user = new User($pdo);

// Signup
$user->signup('john_doe', 'securePassword');

// Login
if ($user->login('john_doe', 'securePassword')) {
    echo "Login successful";
}

// Change Password
$user->changePassword('john_doe', 'newSecurePassword');

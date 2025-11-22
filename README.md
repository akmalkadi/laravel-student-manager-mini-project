# Laravel Student Manager – Mini Project (Chapter 8)

This mini project is part of **Chapter 8 – First Steps in Laravel**  
in the **Web Programming** course (Laravel section).

It is a very small CRUD tool to manage **students** (name + grade), used only for:
- Demonstrating **routes**, **controllers**, **views (Blade)**
- Using **Eloquent ORM** for database access
- Working with **migrations** and **seeders**
- Understanding **CSRF** and **method spoofing** (@csrf, @method('DELETE'))

> 🎯 This is an educational project, not a full production app.

---

## 1. Project Contents

This mini project contains the essential Laravel files required to build a basic CRUD.

### Routes
File: routes/web.php  
Defines the resource routes:

    Route::resource('students', StudentController::class);

### Controller
File: app/Http/Controllers/StudentController.php  
Handles:
- Listing students
- Showing the “add” form
- Saving new students
- Editing existing students
- Updating records
- Deleting records

### Model
File: app/Models/Student.php  
Eloquent model for the students table:

    protected $fillable = ['name', 'grade'];

### Migration
File: database/migrations/xxxx_xx_xx_xxxxxx_create_students_table.php  
Creates the students table with:
- id
- name (string)
- grade (integer)
- timestamps

### Seeder
File: database/seeders/StudentSeeder.php  
Inserts sample students (Ali, Lama, Diala) for testing.

### Views (Blade)
- resources/views/students/index.blade.php  
- resources/views/students/create.blade.php  
- resources/views/students/edit.blade.php  

---

## 2. How These Files Were Created (Step-by-Step)

Here are the Artisan commands used while creating this mini project:

    # 1) Create a new Laravel project
    composer create-project laravel/laravel student_manager

    cd student_manager

    # 2) Create the Student model + migration + controller (resource style)
    php artisan make:model Student -mcr

    # 3) Create a seeder for sample data
    php artisan make:seeder StudentSeeder

Then the files were edited manually:
- Model → added $fillable
- Migration → added name and grade columns
- Seeder → inserted 3 sample rows
- Controller → implemented CRUD
- Views → added list, create, and edit templates
- Routes → added the resource route

---

## 3. How to Clone This Project

If the repository is public, clone using HTTPS:

    git clone https://github.com/akmalkadi/laravel-student-manager-mini-project.git
    cd laravel-student-manager-mini-project

If the repo contains **only mini project files** (not a full Laravel installation),  
see section 4B.

---

## 4A. If This Repo Contains a Full Laravel Project

### 1) Install dependencies

    composer install

### 2) Copy .env and generate key

    cp .env.example .env
    php artisan key:generate

---

## 4B. If This Repo Contains Only the Mini Project Files

### 1) Create a fresh Laravel project

    composer create-project laravel/laravel student_manager
    cd student_manager

### 2) Copy mini project files into your Laravel project

Copy into your project:

- routes/web.php → add Route::resource()
- app/Http/Controllers/StudentController.php
- app/Models/Student.php
- database/migrations/...create_students_table.php
- database/seeders/StudentSeeder.php
- resources/views/students/*.blade.php

Update DatabaseSeeder:

    public function run()
    {
        $this->call(StudentSeeder::class);
    }

---

## 5. Database Setup

Create a database:

    mysql -u root -p
    CREATE DATABASE student_manager;
    EXIT;

Edit your .env file:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=student_manager
    DB_USERNAME=root
    DB_PASSWORD=

---

## 6. Run Migrations & Seeders

    php artisan migrate
    php artisan db:seed

---

## 7. Run the Application

    php artisan serve

Open in browser:

    http://127.0.0.1:8000/students

You should now see the CRUD interface.

---

## 8. How This Project Connects to Chapter 8

This mini project demonstrates:

- Routing
- Controllers
- Blade templates
- Migrations
- Seeders
- Eloquent CRUD
- CSRF protection
- Method spoofing (@method('PUT'), @method('DELETE'))

It is a practical extension of all concepts in Chapter 8.

---

## 9. Suggested Exercises

1. Add an email field to the students table.
2. Add validation (e.g., grade between 0–100).
3. Add sorting (order by grade).
4. Add search (filter students by name).



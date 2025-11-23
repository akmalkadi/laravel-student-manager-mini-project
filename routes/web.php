<?php

// Import Laravel's Route facade so we can define routes
use Illuminate\Support\Facades\Route;

// Import the StudentController so the routes can call its methods
use App\Http\Controllers\StudentController;

/**
 * ---------------------------------------------------
 * Root Route (Homepage)
 * ---------------------------------------------------
 * This route runs when visiting:
 *     http://127.0.0.1:8000/
 *
 * It displays a simple welcome message and a link
 * to the Student Manager mini project.
 */
Route::get('/', function () {
    return '
        <h1>Hello World from Laravel 🎉</h1>
        <p>Welcome to the Student Manager Mini Project.</p>
        <a href="/students">Go to Students Page</a>
    ';
});


/**
 *  ---------------------------------------------------
 *  Student Resource Routes
 *  ---------------------------------------------------
 *  This single line generates all CRUD routes for:
 *      /students
 *      /students/create
 *      /students/{id}/edit
 *      etc.
 *
 *  Route::resource() automatically generates all 7 RESTful routes:
 *
 *      GET     /students             → index
 *      GET     /students/create      → create
 *      POST    /students             → store
 *      GET     /students/{id}        → show   (not used in this mini project)
 *      GET     /students/{id}/edit   → edit
 *      PUT     /students/{id}        → update
 *      DELETE  /students/{id}        → destroy
 *
 *  ---------------------------------------------------
 *  Without Route::resource()
 *  ---------------------------------------------------
 *  We would have to manually write **all 7 routes** like this:
 *
 *      Route::get('/students', [StudentController::class, 'index']);
 *      Route::get('/students/create', [StudentController::class, 'create']);
 *      Route::post('/students', [StudentController::class, 'store']);
 *      Route::get('/students/{id}', [StudentController::class, 'show']);
 *      Route::get('/students/{id}/edit', [StudentController::class, 'edit']);
 *      Route::put('/students/{id}', [StudentController::class, 'update']);
 *      Route::delete('/students/{id}', [StudentController::class, 'destroy']);
 *
 *  As you can see, this is long and repetitive.
 *
 *  Route::resource('students', StudentController::class)
 *  replaces ALL of these with **one clean line**.
 */
Route::resource('students', StudentController::class);

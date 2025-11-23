<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Anonymous migration class (Laravel 8+)
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * This method is called when running:
     *     php artisan migrate
     *
     * It is responsible for creating (or modifying) tables.
     */
    public function up()
    {
        // Create a new table called "students"
        Schema::create('students', function (Blueprint $table) {

            // Auto-incrementing "id" column (primary key)
            $table->id();

            // Student name (VARCHAR in SQL)
            $table->string('name');

            // Student grade (INTEGER in SQL)
            $table->integer('grade');

            // Adds "created_at" and "updated_at" timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * This method is called when running:
     *     php artisan migrate:rollback
     *
     * It should undo whatever "up()" did.
     */
    public function down()
    {
        // If the "students" table exists, drop it
        Schema::dropIfExists('students');
    }
};

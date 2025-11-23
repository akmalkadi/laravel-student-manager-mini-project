<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * This is the main seeder class.
     *
     * When you run:
     *     php artisan db:seed
     *
     * Laravel will execute this "run()" method.
     *
     * Inside it, we list all the seeders we want to run.
     */
    public function run()
    {
        /**
         * Calling StudentSeeder:
         * This will insert sample student data into the "students" table.
         *
         * You can add more seeders here later, for example:
         *     $this->call(UserSeeder::class);
         *     $this->call(TeachersSeeder::class);
         */
        $this->call(StudentSeeder::class);
    }
}

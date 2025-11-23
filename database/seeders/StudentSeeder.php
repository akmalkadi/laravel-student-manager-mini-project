<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// DB facade allows running direct database queries
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * This method is executed when:
     *     php artisan db:seed
     * or when DatabaseSeeder calls this seeder.
     */
    public function run()
    {
        /**
         * Insert sample student records into the "students" table.
         *
         * DB::table()->insert() runs a direct SQL INSERT.
         * Each array inside the main array represents one row.
         *
         * This is useful for:
         *  - testing
         *  - demo content
         *  - initializing data for development
         */
        DB::table('students')->insert([
            ['name' => 'Ali',   'grade' => 90],
            ['name' => 'Lama',  'grade' => 85],
            ['name' => 'Diala', 'grade' => 95],
        ]);
    }
}

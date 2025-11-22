<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert([
            ['name' => 'Ali',   'grade' => 90],
            ['name' => 'Lama',  'grade' => 85],
            ['name' => 'Diala', 'grade' => 95],
        ]);
    }
}

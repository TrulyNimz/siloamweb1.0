<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run(): void
{
    $courses = [
        'Orthopedic & Trauma Medicine',
        'Perioperative Theatre Technology',
        'CNA',
        'Computer Packages',
        'Nursing',
    ];

    foreach ($courses as $course) {
        \DB::table('courses')->updateOrInsert(
            ['name' => $course],
            ['name' => $course]
        );
    }
}

}

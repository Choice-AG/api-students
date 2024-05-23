<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = [
            [
                'name' => 'PHP',
                'price' => 100
            ],
            [
                'name' => 'Laravel',
                'price' => 200
            ],
            [
                'name' => 'Vue',
                'price' => 150
            ],
            [
                'name' => 'React',
                'price' => 250
            ],
            [
                'name' => 'Angular',
                'price' => 300
            ]
        ];

        foreach ($course as $c) {
            \App\Models\Course::create($c);
        }
    }
}

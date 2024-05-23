<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /* Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->date('birthDate');
            $table->timestamps();

            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        }); */

        $students = [
            [
                'name' => 'Goizane',
                'email' => 'goizane@gmail.com',
                'birthDate' => '2000-02-06',
                'course_id' => 1
            ],
            [
                'name' => 'David',
                'email' => 'david@gmail.com',
                'birthDate' => '2001-01-01',
                'course_id' => 2
            ],
            [
                'name' => 'Oscar',
                'email' => 'oscar@gmail.com',
                'birthDate' => '2002-02-02',
                'course_id' => 3
            ],
            [
                'name' => 'Ruben',
                'email' => 'ruben@gmail.com',
                'birthDate' => '2003-03-03',
                'course_id' => 4
            ],
            [
                'name' => 'Marc',
                'email' => 'marc@gmail.com',
                'birthDate' => '2004-04-04',
                'course_id' => 5
            ],
            [
                'name' => 'Alvaro',
                'email' => 'alvaro@gmail.com',
                'birthDate' => '2005-04-04',
                'course_id' => 1
            ],
            [
                'name' => 'Mireia',
                'email' => 'mireia@gmail.com',
                'birthDate' => '2006-04-04',
                'course_id' => 2
            ],
            [
                'name' => 'Jonathan',
                'email' => 'jonathan@gmail.com',
                'birthDate' => '2004-02-02',
                'course_id' => 3
            ],
            [
                'name' => 'Marcos',
                'email' => 'marcos@gmail.com',
                'birthDate' => '2004-01-01',
                'course_id' => 4
            ],
            [
                'name' => 'Leire',
                'email' => 'leire@gmail.com',
                'birthDate' => '2002-07-07',
                'course_id' => 5
            ],
        ];

        foreach ($students as $s) {
            \App\Models\Students::create($s);
        }
    }
}

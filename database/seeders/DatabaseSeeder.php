<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
// import db
use Illuminate\Support\Facades\DB;
// use App\Models\Student;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // call factory 
        // \App\Models\User::factory(10)->create();
        \App\Models\Student::factory(100)->create(); // create 100 records
        // insert actual data
        DB::table('students')->insert([
            'studentid' => 12358465,
            'firstName'=>'Janna',
            'middleName'=>'Sy',
            'lastName'=>'Wong',
            'address'=>'Davao City'
        ]);

        DB::table('courses')->insert([
            'courseNum' => 'IT 1111',
            'courseName' => 'Comp Prog1',
            'description' => 'intro programming',
            'units' => 5
        ]);

        DB::table('courses')->insert([
            'courseNum' => 'IT 1121',
            'courseName' => 'ITC',
            'description' => 'intro to computing',
            'units' => 3
        ]);

        DB::table('courses')->insert([
            'courseNum' => 'IT 1231',
            'courseName' => 'Prog2',
            'description' => 'programming 2',
            'units' => 5
        ]);

        // call seeder
        // $this->call(StudentSeeder::class);

    }
}

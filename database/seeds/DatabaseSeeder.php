<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(LaratrustSeeder::class);
        /* $this->call(SubjectTableSeeder::class); */
        /* $this->call(CourseTableSeeder::class); */
        $this->call(AdminTableseeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(TeacherTableSeeder::class);


    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;
class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course=subject::create([
            'title'=>'science',
            'description'=>'science',
        ]);
    }
}

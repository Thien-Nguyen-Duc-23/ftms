<?php

use Illuminate\Database\Seeder;

class CourseSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_subjects')->insert([
            'id_course' => 1,
            'id_subject' => 1,
        ]); 
        
        DB::table('course_subjects')->insert([
            'id_course' => 1,
            'id_subject' => 2,
        ]); 
    }
}

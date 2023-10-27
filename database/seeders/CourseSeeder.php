<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $courses= ['Canto','Guitarra','Bateria','Piano','Trompeta'];
        foreach($courses as $course){
            DB::table('courses')->insert([
                'name' => $course
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\FinalYearProject;
use Illuminate\Database\Seeder;

class FYPSeeder extends Seeder
{
    public function run()
    {
        FinalYearProject::create([
            'title' => 'Machine Learning in Healthcare',
            'student_name' => 'Alice Johnson'
        ]);

        FinalYearProject::create([
            'title' => 'Blockchain Applications in Supply Chain',
            'student_name' => 'John Doe'
        ]);

        FinalYearProject::create([
            'title' => 'Augmented Reality for Education',
            'student_name' => 'Jane Smith'
        ]);

        FinalYearProject::create([
            'title' => 'Renewable Energy Solutions',
            'student_name' => 'Michael Brown'
        ]);

        FinalYearProject::create([
            'title' => 'Cybersecurity in Financial Services',
            'student_name' => 'Emily Davis'
        ]);
    }
}

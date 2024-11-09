<?php

namespace Database\Seeders;

use App\Models\Newspaper;
use Illuminate\Database\Seeder;

class NewspaperSeeder extends Seeder
{
    public function run()
    {
        Newspaper::create([
            'title' => 'The New York Times',
            'publisher' => 'The New York Times Company',
            'issue_date' => '2023-11-01',
            'language' => 'English'
        ]);

        Newspaper::create([
            'title' => 'The Washington Post',
            'publisher' => 'Nash Holdings',
            'issue_date' => '2023-11-02',
            'language' => 'English'
        ]);

        Newspaper::create([
            'title' => 'The Guardian',
            'publisher' => 'Guardian Media Group',
            'issue_date' => '2023-11-03',
            'language' => 'English'
        ]);

        Newspaper::create([
            'title' => 'The Wall Street Journal',
            'publisher' => 'Dow Jones & Company',
            'issue_date' => '2023-11-04',
            'language' => 'English'
        ]);

        Newspaper::create([
            'title' => 'Los Angeles Times',
            'publisher' => 'Nant Capital',
            'issue_date' => '2023-11-05',
            'language' => 'English'
        ]);
    }
}

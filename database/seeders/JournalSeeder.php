<?php

namespace Database\Seeders;

use App\Models\Journal;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    public function run()
    {
        Journal::create([
            'title' => 'Nature',
            'author' => 'Various Authors',
            'publisher' => 'Nature Publishing Group',
            'publication_year' => 2023
        ]);

        Journal::create([
            'title' => 'Science',
            'author' => 'Various Authors',
            'publisher' => 'American Association for the Advancement of Science',
            'publication_year' => 2023
        ]);

        Journal::create([
            'title' => 'The Lancet',
            'author' => 'Various Authors',
            'publisher' => 'Elsevier',
            'publication_year' => 2023
        ]);

        Journal::create([
            'title' => 'Cell',
            'author' => 'Various Authors',
            'publisher' => 'Cell Press',
            'publication_year' => 2023
        ]);

        Journal::create([
            'title' => 'JAMA',
            'author' => 'Various Authors',
            'publisher' => 'American Medical Association',
            'publication_year' => 2023
        ]);
    }
}

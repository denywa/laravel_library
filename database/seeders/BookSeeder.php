<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        Books::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'publisher' => 'J.B. Lippincott & Co.',
            'publication_year' => 1960
        ]);

        Books::create([
            'title' => 'Brave New World',
            'author' => 'George Orwell',
            'publisher' => 'Secker & Warburg',
            'publication_year' => 1949
        ]);

        Books::create([
            'title' => 'Pride and Prejudice',
            'author' => 'Jane Austen',
            'publisher' => 'T. Egerton',
            'publication_year' => 1913 
        ]);

        Books::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'publisher' => 'Charles Scribner\'s Sons',
            'publication_year' => 1925
        ]);

        Books::create([
            'title' => 'Moby',
            'author' => 'Herman Melville',
            'publisher' => 'Harper & Brothers',
            'publication_year' => 2023
        ]);
    }
}

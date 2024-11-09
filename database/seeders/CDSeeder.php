<?php

namespace Database\Seeders;

use App\Models\CD;
use Illuminate\Database\Seeder;

class CDSeeder extends Seeder
{
    public function run()
    {
        CD::create([
            'title' => 'Thriller',
            'artist' => 'Michael Jackson',
            'genre' => 'Pop',
            'release_year' => 1982
        ]);

        CD::create([
            'title' => 'Back in Black',
            'artist' => 'AC/DC',
            'genre' => 'Rock',
            'release_year' => 1980
        ]);

        CD::create([
            'title' => 'The Dark Side of the Moon',
            'artist' => 'Pink Floyd',
            'genre' => 'Progressive Rock',
            'release_year' => 1973
        ]);

        CD::create([
            'title' => 'The Bodyguard',
            'artist' => 'Whitney Houston',
            'genre' => 'R&B/Soul',
            'release_year' => 1992
        ]);

        CD::create([
            'title' => 'Rumours',
            'artist' => 'Fleetwood Mac',
            'genre' => 'Rock',
            'release_year' => 1977
        ]);
    }
}

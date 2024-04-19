<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $music = [
            [
                'title' => 'Bohemian Rhapsody',
                'artist' => 'Queen',
                'genre' => 'Rock',
                'year' => 1975,
            ],
            [
                'title' => 'Hotel California',
                'artist' => 'Eagles',
                'genre' => 'Rock',
                'year' => 1977,
            ],
            [
                'title' => 'Stairway to Heaven',
                'artist' => 'Led Zeppelin',
                'genre' => 'Rock',
                'year' => 1971,
            ],
            [
                'title' => 'Imagine',
                'artist' => 'John Lennon',
                'genre' => 'Rock',
                'year' => 1971,
            ],
            [
                'title' => 'Smells Like Teen Spirit',
                'artist' => 'Nirvana',
                'genre' => 'Grunge',
                'year' => 1991,
            ],
            [
                'title' => 'One',
                'artist' => 'Metallica',
                'genre' => 'Heavy Metal',
                'year' => 1988,
            ],
            [
                'title' => 'Comfortably Numb',
                'artist' => 'Pink Floyd',
                'genre' => 'Rock',
                'year' => 1979,
            ],
            [
                'title' => 'Hey Jude',
                'artist' => 'The Beatles',
                'genre' => 'Rock',
                'year' => 1968,
            ],
            [
                'title' => 'Layla',
                'artist' => 'Derek and the Dominos',
                'genre' => 'Rock',
                'year' => 1970,
            ],
            [
                'title' => 'Another Brick in the Wall',
                'artist' => 'Pink Floyd',
                'genre' => 'Rock',
                'year' => 1979,
            ],
        ];

        foreach ($music as $m) {
            \App\Models\Music::create($m);
        }
    }
}

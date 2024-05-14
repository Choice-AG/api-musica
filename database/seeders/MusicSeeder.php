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
                'album' => 'A Night at the Opera',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/51PUorlJEOL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 1975,
            ],
            [
                'title' => 'Hotel California',
                'artist' => 'Eagles',
                'album' => 'Hotel California',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/51MYcFSWU8L._SX300_SY300_QL70_ML2_.jpg',
                'year' => 1977,
            ],
            [
                'title' => 'Stairway to Heaven',
                'artist' => 'Led Zeppelin',
                'album' => 'Led Zeppelin IV',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/619OnDt1yvL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 1971,
            ],
            [
                'title' => 'Imagine',
                'artist' => 'John Lennon',
                'album' => 'Imagine',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/41Igg0BWXbL._SY300_SX300_QL70_ML2_.jpg',
                'year' => 1971,
            ],
            [
                'title' => 'Smells Like Teen Spirit',
                'artist' => 'Nirvana',
                'album' => 'Nevermind',
                'genre' => 'Grunge',
                'image' => 'https://m.media-amazon.com/images/I/51Smi49bo8L._SY300_SX300_QL70_ML2_.jpg',
                'year' => 1991,
            ],
            [
                'title' => 'One',
                'artist' => 'Metallica',
                'album' => '...And Justice for All',
                'genre' => 'Heavy Metal',
                'image' => 'https://m.media-amazon.com/images/I/51yzNIFgsaL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 1988,
            ],
            [
                'title' => 'Comfortably Numb',
                'artist' => 'Pink Floyd',
                'album' => 'The Wall',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/51WrG48A3tL._SY300_SX300_QL70_ML2_.jpg',
                'year' => 1979,
            ],
            [
                'title' => 'Hey Jude',
                'artist' => 'The Beatles',
                'album' => 'The Beatles',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/51iciCCL1BL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 1968,
            ],
            [
                'title' => 'Layla',
                'artist' => 'Derek and the Dominos',
                'album' => 'Layla and Other Assorted Love Songs',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/615c7hJ2kaL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 1970,
            ],
            [
                'title' => 'Another Brick in the Wall',
                'artist' => 'Pink Floyd',
                'album' => 'The Wall',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/51WrG48A3tL._SY300_SX300_QL70_ML2_.jpg',
                'year' => 1979,
            ],
            [
                'title' => 'Fancy',
                'artist' => 'Twice',
                'album' => 'Fancy You',
                'genre' => 'K-Pop',
                'image' => 'https://m.media-amazon.com/images/I/51ASrtprttL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 2020,
            ],
            [
                'title' => 'In the frozen',
                'artist' => 'Dreamcatcher',
                'album' => 'Dystopia: The Tree of Language',
                'genre' => 'K-Pop',
                'image' => 'https://m.media-amazon.com/images/I/61-oBHmEeVL._UX358_FMwebp_QL85_.jpg',
                'year' => 2020,
            ],
            [
                'title' => 'la Noia',
                'artist' => 'Angelina Mango',
                'album' => 'la Noia',
                'genre' => 'Pop · Cumbia · Folk',
                'image' => 'https://m.media-amazon.com/images/I/51oTl2UQOjL._UX358_FMwebp_QL85_.jpg',
                'year' => 2024,
            ],
            [
                'title' => 'The code',
                'artist' => 'Nemo',
                'album' => 'The code',
                'genre' => 'Drum and Bass · EDM',
                'image' => 'https://m.media-amazon.com/images/I/51xmA-H6OaL._AA256_UX358_FMwebp_QL85_.jpg',
                'year' => 2024,
            ],
            [
                'title' => 'I WANNA BE YOUR SLAVE',
                'artist' => 'Måneskin',
                'album' => 'Teatro d\'ira: Vol. I',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/61ZQ6Knt-IL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 2021,
            ],
            [
                'title' => 'Beggin',
                'artist' => 'Måneskin',
                'album' => 'Teatro d\'ira: Vol. I',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/61ZQ6Knt-IL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 2021,
            ],
            [
                'title' => 'Zitti e buoni',
                'artist' => 'Måneskin',
                'album' => 'Teatro d\'ira: Vol. I',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/61ZQ6Knt-IL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 2021,
            ],
            [
                'title' => 'Coraline',
                'artist' => 'Måneskin',
                'album' => 'Teatro d\'ira: Vol. I',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/61ZQ6Knt-IL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 2021,
            ],
            [
                'title' => 'Vent\'anni',
                'artist' => 'Måneskin',
                'album' => 'Teatro d\'ira: Vol. I',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/61ZQ6Knt-IL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 2021,
            ],
            [
                'title' => 'Torna a casa',
                'artist' => 'Måneskin',
                'album' => 'Il ballo della vita',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/51gV5lhzjkL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 2018,
            ],
            [
                'title' => 'Coraline',
                'artist' => 'Måneskin',
                'album' => 'Teatro d\'ira: Vol. I',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/61ZQ6Knt-IL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 2021,
            ],
            [
                'title' => 'I WANNA BE YOUR SLAVE',
                'artist' => 'Måneskin',
                'album' => 'Teatro d\'ira: Vol. I',
                'genre' => 'Rock',
                'image' => 'https://m.media-amazon.com/images/I/61ZQ6Knt-IL._SX300_SY300_QL70_ML2_.jpg',
                'year' => 2021,
            ],
        ];

        foreach ($music as $m) {
            \App\Models\Music::create($m);
        }
    }
}

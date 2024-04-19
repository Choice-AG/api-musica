<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusicProviderSeeder extends Seeder
{
    public function run(): void
    {
        $music = DB::table('music')->where('title', 'Bohemian Rhapsody')->first();
        $spotify = DB::table('providers')->where('name', 'Spotify')->first();

        DB::table('provider_music')->insert([
            'provider_id' => $spotify->id,
            'music_id' => $music->id,
        ]);

        $music = DB::table('music')->where('title', 'Stairway to Heaven')->first();
        $appleMusic = DB::table('providers')->where('name', 'Apple Music')->first();

        DB::table('provider_music')->insert([
            'provider_id' => $appleMusic->id,
            'music_id' => $music->id,
        ]);

        $music = DB::table('music')->where('title', 'Hotel California')->first();
        $youtubeMusic = DB::table('providers')->where('name', 'YouTube Music')->first();

        DB::table('provider_music')->insert([
            'provider_id' => $youtubeMusic->id,
            'music_id' => $music->id,
        ]);
    }
}

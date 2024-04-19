<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    public function run(): void
    {
        $providers = [
            [
                'name' => 'Spotify',
                'platform' => 'Web',
                'url' => 'https://www.spotify.com',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png',
            ],
            [
                'name' => 'Apple Music',
                'platform' => 'iOS',
                'url' => 'https://www.apple.com/music',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/833px-Apple_logo_black.svg.png',
            ],
            [
                'name' => 'YouTube Music',
                'platform' => 'Web',
                'url' => 'https://music.youtube.com',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Youtube_Music_icon.svg/2048px-Youtube_Music_icon.svg.png',
            ],
        ];

        foreach ($providers as $provider) {
            \App\Models\Provider::create($provider);
        }
    }
}

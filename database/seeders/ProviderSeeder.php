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
                'logo' => 'https://www.spotify.com/logo.png',
            ],
            [
                'name' => 'Apple Music',
                'platform' => 'iOS',
                'url' => 'https://www.apple.com/music',
                'logo' => 'https://www.apple.com/logo.png',
            ],
            [
                'name' => 'YouTube Music',
                'platform' => 'Web',
                'url' => 'https://music.youtube.com',
                'logo' => 'https://music.youtube.com/logo.png',
            ],
        ];

        foreach ($providers as $provider) {
            \App\Models\Provider::create($provider);
        }
    }
}

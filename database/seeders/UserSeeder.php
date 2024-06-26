<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::where('email', 'admin@gmail.com')->first()) {
            return;
        } else {
            User::insert([
                [
                    'name' => 'Admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('admin123')

                ],
            ]);
        }

    }
}

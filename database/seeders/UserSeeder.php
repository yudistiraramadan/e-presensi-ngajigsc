<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'zulfa',
            'level' => 'admin',
            'email' => 'rizalzulfa@gmail.com',
            'password' => Hash::make('tes'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'yudis',
            'level' => 'santri',
            'email' => 'yudistiragsc36@gmail.com',
            'password' => Hash::make('tes'),
            'remember_token' => Str::random(60),
        ]);
    }
}
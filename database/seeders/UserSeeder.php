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
            'name' => 'Rizal Zulfa',
            'level' => 'admin',
            'email' => 'rizalzulfa@gmail.com',
            'password' => Hash::make('tes'),
            'phone' => '085228405645',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Yudistira Ramdan Kalimasada',
            'level' => 'santri',
            'email' => 'yudistiragsc36@gmail.com',
            'password' => Hash::make('tes'),
            'phone' => '085228409840',
            'remember_token' => Str::random(60),
        ]);
    }
}

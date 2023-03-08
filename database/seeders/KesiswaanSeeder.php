<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kesiswaan;
use Illuminate\Support\Str;

class KesiswaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kesiswaan::truncate();
        Kesiswaan::create([
            'nama' => 'Fajar Riyanto',
            'level' => 'kesiswaan',
            'email' => 'fajar@gmail.com',
            'password' => bcrypt('fajfaj'),
            'remember_token' => Str::random(60),
        ]);
        Kesiswaan::create([
            'nama' => 'Yudianto',
            'level' => 'kesiswaan',
            'email' => 'yudianto@gmail.com',
            'password' => bcrypt('yudyud'),
            'remember_token' => Str::random(60),
        ]);
        Kesiswaan::create([
            'nama' => 'Zefrika Aulia',
            'level' => 'kesiswaan',
            'email' => 'lia@gmail.com',
            'password' => bcrypt('lialia'),
            'remember_token' => Str::random(60),
        ]);
    }
}

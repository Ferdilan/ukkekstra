<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\daftarekstra;

class DaftarEkstraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        daftarekstra::truncate();
        daftarekstra::create([
            'nama' => 'TARUNA',
            'deskripsi' => 'PBB',
        ]);
        daftarekstra::create([
            'nama' => 'PALANG MERAH REMAJA',
            'deskripsi' => 'mas tandu',
        ]);
        daftarekstra::create([
            'nama' => 'PRAMUKA',
            'deskripsi' => 'sandi morse',
        ]);
        daftarekstra::create([
            'nama' => 'JANGGALA',
            'deskripsi' => 'panjat tebing',
        ]);
        daftarekstra::create([
            'nama' => 'FUTSAL',
            'deskripsi' => 'nribun',
        ]);
        daftarekstra::create([
            'nama' => 'VOLI',
            'deskripsi' => 'passsing',
        ]);
        daftarekstra::create([
            'nama' => 'ROHIS',
            'deskripsi' => 'muludan',
        ]);
        daftarekstra::create([
            'nama' => 'PASKIBRAKA',
            'deskripsi' => 'lkbb',
        ]);
        daftarekstra::create([
            'nama' => 'ROBOTIK',
            'deskripsi' => 'robot pengacara',
        ]);
        daftarekstra::create([
            'nama' => 'MUSIK',
            'deskripsi' => 'orkesan',
        ]);
        daftarekstra::create([
            'nama' => 'GANDINI CREATIVE',
            'deskripsi' => 'fotographi & videographi',
        ]);
        daftarekstra::create([
            'nama' => 'TARI',
            'deskripsi' => 'Reog',
        ]);
        daftarekstra::create([
            'nama' => 'BASKET',
            'deskripsi' => 'dribbling',
        ]);
    }
}

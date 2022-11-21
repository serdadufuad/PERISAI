<?php

namespace Database\Seeders;
use App\Models\Kegiatan;

use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kegiatan::create([
            'kegiatan' => 'Peresmian',
        ]);
        Kegiatan::create([
            'kegiatan' => 'Audiensi',
        ]);
        Kegiatan::create([
            'kegiatan' => 'Hari Besar',
        ]);
        Kegiatan::create([
            'kegiatan' => 'Akad Nikah',
        ]);
        Kegiatan::create([
            'kegiatan' => 'Wawancara',
        ]);
        Kegiatan::create([
            'kegiatan' => 'Bantuan',
        ]);
    }
}

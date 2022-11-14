<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Sonya Elfadhila, S.E., M.A.',
            'jabatan' => 'Kasubbag Administrassi Protokol',
            'email' => 'sonya@perisai.com',
            'password' => Hash::make('123qweasd'),
            'file_foto' => 'Sonya Elfadhila, S.E., M.A..png',
        ]);

        $admin->assignRole('admin');

        $admin = User::create([
            'name' => 'Fuad Ahmad',
            'jabatan' => 'PPNPN Biro Protokol',
            'email' => 'fuad@perisai.com',
            'password' => Hash::make('123qweasd'),
            'file_foto' => 'fuad ahmad.jpg',
        ]);

        $admin->assignRole('pic');

        $admin = User::create([
            'name' => 'Substansi',
            'jabatan' => 'Substansi',
            'email' => 'substansi@perisai.com',
            'password' => Hash::make('123qweasd'),
            'file_foto' => 'substansi.jpg',
        ]);

        $admin->assignRole('substansi');

        $admin = User::create([
            'name' => 'Pimpinan',
            'jabatan' => 'Kepala Sekretariat Presiden',
            'email' => 'kasetpres@perisai.com',
            'password' => Hash::make('123qweasd'),
            'file_foto' => 'pimpinan.jpg',
        ]);

        $admin->assignRole('pimpinan');


    }
}

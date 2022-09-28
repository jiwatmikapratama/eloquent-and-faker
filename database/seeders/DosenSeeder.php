<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{

    public function run()
    {
        Dosen::create([
            'nama_dosen' => 'Ilham God',
            'umur' => '30',
            'alamat' => 'Rumah Brando',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    public function run()
    {
        Fakultas::create([
            'nama_fakultas' => 'Teknik dan Kejuruan',
        ]);
    }
}

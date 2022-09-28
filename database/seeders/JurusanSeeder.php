<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{

    public function run()
    {
        Jurusan::create([
            'nama_jurusan' => 'Teknik Informatika',
            'fakultas_id' => '1',
            'dosens_id' => '1',
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Industri',
            'fakultas_id' => '1',
            'dosens_id' => '3',
        ]);
        // Jurusan::create([
        //     'nama_jurusan' => 'Teknik Informatika',
        //     'fakultas_id' => '1',
        //     'dosens_id' => '1',
        // ]);
        // Jurusan::create([
        //     'nama_jurusan' => 'Teknik Informatika',
        //     'fakultas_id' => '1',
        //     'dosens_id' => '1',
        // ]);
        // Jurusan::create([
        //     'nama_jurusan' => 'Teknik Informatika',
        //     'fakultas_id' => '1',
        //     'dosens_id' => '1',
        // ]);
    }
}

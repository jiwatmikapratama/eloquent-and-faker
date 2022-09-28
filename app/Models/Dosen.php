<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens';
    protected $guarded = ['id'];

    public function jurusan()
    {
        return $this->hasOne(Jurusan::class, 'jurusans_id');
    }
}

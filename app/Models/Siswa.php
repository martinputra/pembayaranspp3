<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function siswa()
    {
        return $this->belongsTo('App\Spp');
    }
}

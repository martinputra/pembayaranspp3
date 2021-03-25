<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    protected  $table = 'spps';

    public function profile()
    {
        return $this->hasOne('App\Siswa');
    }
}
// gimana kak?
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = "absens";
    protected $fillable = ['name', 'keterangan', 'tgl_absen'];
}

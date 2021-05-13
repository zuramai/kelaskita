<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = "absens";
    protected $fillable = ['student_id', 'keterangan', 'tgl_absen'];
    
    public function students() {
        return $this->belongsTo(Student::class,'student_id');
    }

}

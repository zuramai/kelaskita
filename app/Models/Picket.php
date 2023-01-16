<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picket extends Model
{
    protected $fillable = ['day_id','student_id'];
    
    public function student() {
        return $this->belongsTo('App\Models\Student');
    }

    public function day() {
        return $this->belongsTo('App\Models\Day');
    }
}

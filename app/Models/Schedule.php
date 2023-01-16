<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['subject_id','day_id', 'start_time','end_time'];

    public function subject() {
        return $this->belongsTo('App\Models\Subject');
    }

    public function day() {
        return $this->belongsTo('App\Models\Day');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable = ['name'];

    public function schedules() {
        return $this->hasMany('App\Models\Schedule','day_id');
    }

    public function pickets() {
        return $this->hasMany('App\Models\Picket', 'day_id');
    }
}

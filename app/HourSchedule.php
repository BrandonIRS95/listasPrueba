<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HourSchedule extends Model
{
    public $timestamps = false;

    public function day_schedule() {
        return $this->belongsTo('App\DaySchedule');
    }

    public function hour() {
        return $this->belongsTo('App\Hour');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaySchedule extends Model
{
    public $timestamps = false;

    public function group_subjects() {
        return $this->belongsTo('App\GroupSubjects');
    }

    public function hours() {
        return $this->hasMany('App\HourSchedule');
    }
}

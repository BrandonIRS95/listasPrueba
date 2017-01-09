<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    public $timestamps = false;

    public function hour_schedule() {
        return $this->hasMany('App\HourSchedule');
    }
}

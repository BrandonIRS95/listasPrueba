<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupSubjects extends Model
{
    public $timestamps = false;

    public function teacher() {
        return $this->belongsTo('App\Teacher');
    }

    public function subject() {
        return $this->belongsTo('App\Subject');
    }

    public function group() {
        return $this->belongsTo('App\Group');
    }

    public function days() {
        return $this->hasMany('App\DaySchedule');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $timestamps = false;

    public function group_subjects() {
        return $this->hasMany('App\GroupSubjects');
    }
}

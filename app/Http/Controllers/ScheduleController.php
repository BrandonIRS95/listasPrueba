<?php

namespace App\Http\Controllers;

use App\Group;
use App\GroupSubjects;
use App\Hour;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function getGetSchedule() {

        $groups = Group::where('period_id', 1)->select('id')->get();

        $schedules = GroupSubjects::where('teacher_id', 1)->whereIn('group_id', $groups)->with(['subject', 'group', 'days', 'days.hours'])->get();

        $array = $this->getListHours();

        foreach ($schedules as $schedule) {
            foreach ($schedule->days as $day) {
                foreach ($day->hours as $hour) {

                    $obj = $array[$hour->hour_id - 1];
                    $numberDay = $day->day;

                    $item = new \stdClass();
                    $item->mat = $schedule->subject->name;
                    $item->gru = $schedule->group->name;

                    if($numberDay == 0) $obj->lun = $item;
                    if($numberDay == 1) $obj->mar = $item;
                    if($numberDay == 2) $obj->mie = $item;
                    if($numberDay == 3) $obj->jue = $item;
                    if($numberDay == 4) $obj->vie = $item;
                }
            }
        }

        return response()->json(["schedule" => $array, "groups" => $groups]);
    }

    public function getListHours() {
        $hours = Hour::all();
        $arrayRows = array();

        foreach ($hours as $hour) {
            $row = new \stdClass();
            $row->hora = $hour->start_hour.' - '.$hour->end_hour;
            $row->lun = null;
            $row->mar = null;
            $row->mie = null;
            $row->jue = null;
            $row->vie = null;

            array_push($arrayRows, $row);
        }

        return $arrayRows;
    }
}

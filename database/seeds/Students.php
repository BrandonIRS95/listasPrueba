<?php

use Illuminate\Database\Seeder;

class Students extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $mat1 = new \App\Subject();
        $mat1->name = 'Electronica';
        $mat1->save();

        $mat2 = new \App\Subject();
        $mat2->name = 'Programacion';
        $mat2->save();

        $mat3 = new \App\Subject();
        $mat3->name = 'Espanol';
        $mat3->save();

        $mat4 = new \App\Subject();
        $mat4->name = 'Historia';
        $mat4->save();

        $mat5 = new \App\Subject();
        $mat5->name = 'Deportes';
        $mat5->save();

        $period = new \App\Period();
        $period->name = "Enero-Abril 2017";
        $period->start_date = "2017-01-05";
        $period->end_date = "2017-04-20";
        $period->first_month_end = "2017-01-31";
        $period->last_month_start = "2017-04-01";
        $period->save();

        $group1 = new \App\Group();
        $group1->name = "2A";
        $group1->period_id = 1;
        $group1->save();

        $group2 = new \App\Group();
        $group2->name = "2B";
        $group2->period_id = 1;
        $group2->save();

        $group3 = new \App\Group();
        $group3->name = "3C";
        $group3->period_id = 1;
        $group3->save();

        $teacher = new \App\Teacher();
        $teacher->first_name = "Daniel";
        $teacher->last_name = "Torres";
        $teacher->save();

        $teacher1 = new \App\Teacher();
        $teacher1->first_name = "Martha";
        $teacher1->last_name = "Kent";
        $teacher1->save();

        $group_subjects1 = new \App\GroupSubjects();
        $group_subjects1->group_id = $group1->id;
        $group_subjects1->subject_id = $mat5->id;
        $group_subjects1->teacher_id = $teacher->id;
        $group_subjects1->save();

        $days = new \App\DaySchedule();
        $days->group_subjects_id = $group_subjects1->id;
        $days->day = 0;
        $days->save();

        $hours = new \App\HourSchedule();
        $hours->day_schedule_id = $days->id;
        $hours->hour_id = 1;
        $hours->save();

        $hours = new \App\HourSchedule();
        $hours->day_schedule_id = $days->id;
        $hours->hour_id = 2;
        $hours->save();

        $group_subjects1 = new \App\GroupSubjects();
        $group_subjects1->group_id = $group1->id;
        $group_subjects1->subject_id = $mat2->id;
        $group_subjects1->teacher_id = $teacher1->id;
        $group_subjects1->save();

        $days = new \App\DaySchedule();
        $days->group_subjects_id = $group_subjects1->id;
        $days->day = 2;
        $days->save();

        $hours = new \App\HourSchedule();
        $hours->day_schedule_id = $days->id;
        $hours->hour_id = 5;
        $hours->save();

        $group_subjects1 = new \App\GroupSubjects();
        $group_subjects1->group_id = $group2->id;
        $group_subjects1->subject_id = $mat1->id;
        $group_subjects1->teacher_id = $teacher->id;
        $group_subjects1->save();

        $days = new \App\DaySchedule();
        $days->group_subjects_id = $group_subjects1->id;
        $days->day = 1;
        $days->save();

        $hours = new \App\HourSchedule();
        $hours->day_schedule_id = $days->id;
        $hours->hour_id = 3;
        $hours->save();

        $hours = new \App\HourSchedule();
        $hours->day_schedule_id = $days->id;
        $hours->hour_id = 4;
        $hours->save();

        $hours = new \App\HourSchedule();
        $hours->day_schedule_id = $days->id;
        $hours->hour_id = 5;
        $hours->save();

        $group_subjects1 = new \App\GroupSubjects();
        $group_subjects1->group_id = $group3->id;
        $group_subjects1->subject_id = $mat2->id;
        $group_subjects1->teacher_id = $teacher->id;
        $group_subjects1->save();

        $days = new \App\DaySchedule();
        $days->group_subjects_id = $group_subjects1->id;
        $days->day = 4;
        $days->save();

        $hours = new \App\HourSchedule();
        $hours->day_schedule_id = $days->id;
        $hours->hour_id = 3;
        $hours->save();

        $hours = new \App\HourSchedule();
        $hours->day_schedule_id = $days->id;
        $hours->hour_id = 9;
        $hours->save();

        /*$hours = new \App\HourSchedule();
        $hours->day_schedule_id = $days->id;
        $hours->hour_id = 5;
        $hours->save();*/


    }
}

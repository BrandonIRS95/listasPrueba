<?php

use Illuminate\Database\Seeder;

class Hours extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hours = new \App\Hour();
        $hours->start_hour = "7:00:00";
        $hours->end_hour = "7:50:00";
        $hours->save();

        $hours = new \App\Hour();
        $hours->start_hour = "7:50:00";
        $hours->end_hour = "8:40:00";
        $hours->save();

        $hours = new \App\Hour();
        $hours->start_hour = "8:40:00";
        $hours->end_hour = "9:30:00";
        $hours->save();

        $hours = new \App\Hour();
        $hours->start_hour = "9:30:00";
        $hours->end_hour = "10:20:00";
        $hours->save();

        $hours = new \App\Hour();
        $hours->start_hour = "10:40:00";
        $hours->end_hour = "11:30:00";
        $hours->save();

        $hours = new \App\Hour();
        $hours->start_hour = "11:30:00";
        $hours->end_hour = "12:20:00";
        $hours->save();

        $hours = new \App\Hour();
        $hours->start_hour = "12:20:00";
        $hours->end_hour = "13:10:00";
        $hours->save();

        $hours = new \App\Hour();
        $hours->start_hour = "13:10:00";
        $hours->end_hour = "14:00:00";
        $hours->save();

        $hours = new \App\Hour();
        $hours->start_hour = "17:50:00";
        $hours->end_hour = "18:40:00";
        $hours->save();

        $hours = new \App\Hour();
        $hours->start_hour = "18:40:00";
        $hours->end_hour = "19:30:00";
        $hours->save();

        $hours = new \App\Hour();
        $hours->start_hour = "19:30:00";
        $hours->end_hour = "20:20:00";
        $hours->save();

        $hours = new \App\Hour();
        $hours->start_hour = "20:20:00";
        $hours->end_hour = "21:10:00";
        $hours->save();

        $hours = new \App\Hour();
        $hours->start_hour = "21:10:00";
        $hours->end_hour = "22:00:00";
        $hours->save();

        $hours = new \App\Hour();
        $hours->start_hour = "22:00:00";
        $hours->end_hour = "22:50:00";
        $hours->save();
    }
}

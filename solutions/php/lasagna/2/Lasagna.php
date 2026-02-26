<?php

class Lasagna
{
    public function expectedCookTime()
    {
        return 40;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        return $this->expectedCookTime() - $elapsed_minutes;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        return  2 * $layers_to_prep;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        $oven_time = $this->totalPreparationTime($layers_to_prep) ;
        return  $oven_time + $elapsed_minutes;
    }

    public function alarm()
    {
        return "Ding!";
    }
}
    $timer = new Lasagna();
    $timer->expectedCookTime();
    $timer->remainingCookTime(20);
    $timer->totalPreparationTime(7);
    $timer->totalElapsedTime(4,13);
    $timer->alarm();

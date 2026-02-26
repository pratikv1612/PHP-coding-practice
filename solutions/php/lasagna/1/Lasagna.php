<?php

class Lasagna
{
    public function expectedCookTime()
    {
        // Implement the expectedCookTime method
        return $timer = 40;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        // Implement the remainingCookTime method
        $this->elapsed_minutes = $elapsed_minutes;
        $oven_time = 40;
        $timer = $oven_time - $elapsed_minutes;
        return $timer;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        // Implement the totalPreparationTime method
        $this->layers_to_prep = $layers_to_prep;
        $timer = 2 * $layers_to_prep;
        return $timer;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        // Implement the totalElapsedTime method
        $this->layers_to_prep = $layers_to_prep;
        $this->elapsed_minutes = $elapsed_minutes;
        $oven_time = 2 * $layers_to_prep ;
        $timer = $oven_time + $elapsed_minutes;
        return $timer;
    }

    public function alarm()
    {
        // Implement the alarm method
        return $timer = "Ding!";
    }
}
    $timer = new Lasagna();
    // $timer->expectedCookTime();
    // $timer->remainingCookTime(20);
    // $timer->totalPreparationTime(7);
    // $timer->totalElapsedTime(4,13);
    $timer->alarm();

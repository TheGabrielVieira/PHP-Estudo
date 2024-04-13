<?php

class Lasagna
{
    public function expectedCookTime(int $int = 40)
    {
        $timer = new Lasagna;
        $timer ->expectedCookTime($int);

        return $timer;

        // Implement the expectedCookTime method
    }


    public function remainingCookTime($elapsed_minutes)
    {
        // Implement the remainingCookTime method
    }

    public function totalPreparationTime($layers_to_prep)
    {
        // Implement the totalPreparationTime method
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        // Implement the totalElapsedTime method
    }

    public function alarm()
    {
        // Implement the alarm method
    }
}

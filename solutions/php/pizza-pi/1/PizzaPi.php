<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizza,$person)
    {
        $serve = ($person * 20) + 200;
        return $grams = $pizza * $serve;
    }

    public function calculateSauceRequirement($pizza,$sauce)
    {
        $can = 125;
        return $cans_of_sauce = $pizza * $can / $sauce;
    }

    public function calculateCheeseCubeCoverage($cheese, $thick , $diameter)
    {
        $layer = $thick * pi() * $diameter;
        return $pizza = floor(pow($cheese , 3) / $layer);
    }

    public function calculateLeftOverSlices($pizza,$person)
    {
        $totalSlice = $pizza * 8;
        return $left = $totalSlice % $person;
    }
}

$pizza_pi = new PizzaPi();
$pizza_pi->calculateDoughRequirement(4, 8);
$pizza_pi->calculateSauceRequirement(8, 250);
$pizza_pi->calculateCheeseCubeCoverage(25, 0.5, 30);
$pizza_pi->calculateLeftOverSlices(2, 4);
$pizza_pi->calculateLeftOverSlices(4, 3);
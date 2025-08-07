<?php

declare(strict_types=1);

class Lasagna
{
    //global $expectedCookTime;
    // Please define the 'expectedCookTime()' function
public function expectedCookTime(){
    $expectedCookTime = 40;
    return $expectedCookTime;
}
    // Please define the 'remainingCookTime($elapsed_minutes)' function
public function remainingCookTime($elapsed_minutes){
    $expectedCookTime = $this->expectedCookTime();
    $remaining_cook_time = $expectedCookTime - $elapsed_minutes;
    return $remaining_cook_time;
}
    // Please define the 'totalPreparationTime($layers_to_prep)' function
public function totalPreparationTime($layers_to_prep){
    $layer_time = 2;
    $preparation_time = $layers_to_prep * $layer_time;
    return $preparation_time;
    
}
    // Please define the 'totalElapsedTime($layers_to_prep, $elapsed_minutes)' function
public function totalElapsedTime($layers_to_prep, $elapsed_minutes){
    $total_elapsed_time = ($layers_to_prep * 2) + $elapsed_minutes;
    return $total_elapsed_time;
}
    // Please define the 'alarm()' function
    public function alarm(){
        $alarm = 'Ding!';
        return $alarm;
    }
}

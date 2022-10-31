<?php

declare(strict_types = 1);

namespace App\DesignPattern\Adapter\Model;

/**
 * Class App\DesignPattern\Adapter\Model\SportsProgram
 */
class SportsProgram
{
    private string $workoutPlace;

    private string $workoutType;

    private string $mainExercise;

    public function getWorkoutPlace(): string
    {
        return $this->workoutPlace;
    }

    public function setWorkoutPlace(string $workoutPlace): self
    {
        $this->workoutPlace = $workoutPlace;
        return $this;
    }

    public function getWorkoutType(): string
    {
        return $this->workoutType;
    }

    public function setWorkoutType(string $workoutType): self
    {
        $this->workoutType = $workoutType;
        return $this;
    }

    public function getMainExercise(): string
    {
        return $this->mainExercise;
    }

    public function setMainExercise(string $mainExercise): self
    {
        $this->mainExercise = $mainExercise;
        return $this;
    }
}

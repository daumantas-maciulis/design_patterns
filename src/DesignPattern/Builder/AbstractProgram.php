<?php

declare(strict_types = 1);

namespace App\DesignPattern\Builder;

/**
 * Class App\DesignPattern\Builder\AbstractProgram
 */
abstract class AbstractProgram
{
    protected string $workoutPlace;

    protected string $mainExercise;

    protected int $dailyCalories;

    public function getWorkoutPlace(): string
    {
        return $this->workoutPlace;
    }

    public function setWorkoutPlace(string $workoutPlace): self
    {
        $this->workoutPlace = $workoutPlace;
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

    public function getDailyCalories(): int
    {
        return $this->dailyCalories;
    }

    public function setDailyCalories(int $dailyCalories): self
    {
        $this->dailyCalories = $dailyCalories;
        return $this;
    }
}

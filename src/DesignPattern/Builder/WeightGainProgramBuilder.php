<?php

declare(strict_types = 1);

namespace App\DesignPattern\Builder;

/**
 * Class App\DesignPattern\Builder\WeightGainProgramBuilder
 */
class WeightGainProgramBuilder implements ProgramBuilderInterface
{
    private WeightGainProgram $program;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->program = new WeightGainProgram();
    }

    public function setWorkoutPlace(): ProgramBuilderInterface
    {
        $this->program->setWorkoutPlace('Gym');

        return $this;
    }

    public function setMainExercise(): ProgramBuilderInterface
    {
        $this->program->setMainExercise('Squats');

        return $this;
    }

    public function setNeededDailyCalorieCount(int $baseCalories): ProgramBuilderInterface
    {
        $this->program->setDailyCalories($baseCalories + 500);

        return $this;
    }

    public function getProgram(): WeightGainProgram
    {
        $program = $this->program;
        $this->reset();

        return $program;
    }
}

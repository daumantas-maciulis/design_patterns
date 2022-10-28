<?php

declare(strict_types = 1);

namespace App\DesignPattern\Builder;

/**
 * Class App\DesignPattern\Builder\WeighLossProgramBuilder
 */
class WeighLossProgramBuilder implements ProgramBuilderInterface
{
    private WeightLossProgram $program;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->program = new WeightLossProgram();
    }

    public function setWorkoutPlace(): self
    {
        $this->program->setWorkoutPlace('Running track');

        return $this;
    }

    public function setMainExercise(): self
    {
        $this->program->setMainExercise('Running');

        return $this;
    }

    public function setNeededDailyCalorieCount(int $baseCalories): self
    {
        $this->program->setDailyCalories($baseCalories - 500);

        return $this;
    }

    public function getProgram(): WeightLossProgram
    {
        $program = $this->program;
        $this->reset();

        return $program;
    }
}

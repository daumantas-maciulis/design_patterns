<?php

declare(strict_types = 1);

namespace App\DesignPattern\Builder;

/**
 * Class App\DesignPattern\Builder\SportProgramDirector
 */
class SportProgramDirector
{
    public function makeWeighGainProgram(WeightGainProgramBuilder $builder, int $dailyCalories): WeightGainProgram
    {
        $builder
            ->setMainExercise()
            ->setWorkoutPlace()
            ->setNeededDailyCalorieCount($dailyCalories);

        return $builder->getProgram();
    }

    public function makeWeightLossProgram(WeighLossProgramBuilder $builder, int $dailyCalories): WeightLossProgram
    {
        $builder
            ->setMainExercise()
            ->setWorkoutPlace()
            ->setNeededDailyCalorieCount($dailyCalories);

        return $builder->getProgram();
    }
}

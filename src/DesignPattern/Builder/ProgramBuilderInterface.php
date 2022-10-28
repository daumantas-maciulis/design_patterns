<?php

declare(strict_types = 1);

namespace App\DesignPattern\Builder;

/**
 * Class App\DesignPattern\Builder\Builder
 */
interface ProgramBuilderInterface
{
    public function reset(): void;

    public function setWorkoutPlace(): ProgramBuilderInterface;

    public function setMainExercise(): ProgramBuilderInterface;

    public function setNeededDailyCalorieCount(int $baseCalories): ProgramBuilderInterface;
}

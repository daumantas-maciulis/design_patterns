<?php

declare(strict_types = 1);

namespace App\DesignPattern\Adapter;

/**
 * Class App\DesignPattern\Adapter\Client
 */
class Client
{
    public function showProgram(ProgramConverterInterface $converter, string $fileName): array
    {
        $program = $converter->getSportsProgram($fileName);

        return [
            'workoutPlace' => $program->getWorkoutPlace(),
            'workoutType'  => $program->getWorkoutType(),
            'mainExercise' => $program->getMainExercise(),
        ];
    }
}

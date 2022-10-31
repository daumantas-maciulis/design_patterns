<?php

declare(strict_types = 1);

namespace App\DesignPattern\Adapter;

use App\DesignPattern\Adapter\Model\SportsProgram;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class App\DesignPattern\Adapter\JsonToProgramConverter
 */
class JsonToProgramConverter implements ProgramConverterInterface
{
    public function getSportsProgram(string $fileName): SportsProgram
    {
        $fileContents = file_get_contents($fileName);

        $data = json_decode($fileContents, true);

        $sportsProgram = new SportsProgram();
        $sportsProgram
            ->setWorkoutPlace($data['workoutPlace'])
            ->setWorkoutType($data['workoutType'])
            ->setMainExercise($data['mainExercise']);

        return $sportsProgram;
    }
}

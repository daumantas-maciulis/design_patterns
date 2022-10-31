<?php

declare(strict_types = 1);

namespace App\DesignPattern\Adapter;

use App\DesignPattern\Adapter\Model\SportsProgram;

/**
 * Class App\DesignPattern\Adapter\ProgramConverterInterface
 */
interface ProgramConverterInterface
{
    public function getSportsProgram(string $fileName): SportsProgram;
}
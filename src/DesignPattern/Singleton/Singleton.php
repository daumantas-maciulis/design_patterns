<?php

declare(strict_types = 1);

namespace App\DesignPattern\Singleton;

/**
 * Class App\DesignPattern\Singleton\Singleton
 */
class Singleton
{
    protected const DATE_FORMAT = 'Y-m-d h:i:sa';

    protected static array $instances = [];

    protected function __construct()
    {
    }

    public static function getInstance(): self
    {
        $subClass = static::class;
        if (!isset(self::$instances[$subClass])) {
            self::$instances[$subClass] = new static();
        }

        return self::$instances[$subClass];
    }
}

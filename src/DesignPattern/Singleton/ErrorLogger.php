<?php

declare(strict_types = 1);

namespace App\DesignPattern\Singleton;

/**
 * Class App\DesignPattern\Singleton\ErrorLogger
 */
class ErrorLogger extends Singleton
{
    private const FILE_LOCATION = __DIR__ . '/../../../var/singleton/error.log';

    /**
     * @var false|resource
     */
    private $file;

    protected function __construct()
    {
        $this->file = fopen(self::FILE_LOCATION, 'a+');

        parent::__construct();
    }

    public function log(string $log): void
    {
        $data = sprintf('Error: date %s, log date: %s', (new \DateTime())->format(self::DATE_FORMAT), $log);

        fwrite($this->file, $data);
    }
}

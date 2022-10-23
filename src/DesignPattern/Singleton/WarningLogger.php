<?php

declare(strict_types = 1);

namespace App\DesignPattern\Singleton;

class WarningLogger extends Singleton
{
    private const FILE_LOCATION = '../../../var/singleton/error.log';

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
        $data = sprintf('Warning: date %s, log date: %s /n', (new \DateTime())->format(self::DATE_FORMAT), $log);

        fwrite($this->file, $data);
    }
}

<?php

declare(strict_types = 1);

namespace App\Command;

use App\DesignPattern\Singleton\ErrorLogger;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class App\Command\Singleton
 */
class Singleton extends Command
{
    protected static $defaultName = 'singleton';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $errorLogger1 = ErrorLogger::getInstance();
        $errorLogger2 = ErrorLogger::getInstance();

        if ($errorLogger1 === $errorLogger2) {
            $output->writeln('Same instance');
        }

        $errorLogger1->log("command log");

        $fileData = file_get_contents(__DIR__ . '/../../var/singleton/error.log');

        $output->writeln($fileData);

        return Command::SUCCESS;
    }
}

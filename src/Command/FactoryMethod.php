<?php

declare(strict_types = 1);

namespace App\Command;

use App\DesignPattern\Factory\MongoDataFetcher;
use App\DesignPattern\Factory\MysqlDataFetcher;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class App\Command\FactoryMethod
 */
class FactoryMethod extends Command
{
    private const TYPE_MYSQL = 'mysql';
    private const TYPE_MONGO = 'mongo';

    protected static $defaultName = 'factory_method';

    protected function configure()
    {
        $this->addArgument('username', InputArgument::REQUIRED);
        $this->addArgument('password', InputArgument::REQUIRED);
        $this->addArgument('type', InputArgument::REQUIRED, 'Provide type of connector');
        $this->addArgument('data', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $argumentType = $input->getArgument('type');
        $argumentUsername = $input->getArgument('username');
        $argumentPassword = $input->getArgument('password');
        $argumentData = $input->getArgument('data');

        switch ($argumentType) {
            case self::TYPE_MYSQL:
                $fetcher = new MysqlDataFetcher($argumentUsername, $argumentPassword);
                $response = $fetcher->fetch($argumentData);
                break;
            case self::TYPE_MONGO:
                $fetcher = new MongoDataFetcher($argumentUsername, $argumentPassword);
                $response = $fetcher->fetch($argumentData);
                break;
            default:
                echo sprintf('selected type %s is non existent', $argumentType);
                return Command::FAILURE;
        }

        echo $response;

        return Command::SUCCESS;
    }
}

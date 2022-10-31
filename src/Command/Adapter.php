<?php

declare(strict_types = 1);

namespace App\Command;

use App\DesignPattern\Adapter\Client;
use App\DesignPattern\Adapter\JsonToProgramConverter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class App\Command\Adapter
 */
class Adapter extends Command
{
    protected static $defaultName = 'adapter';

    protected function configure()
    {
        $this->addArgument('type', InputArgument::REQUIRED);
        $this->addArgument('fileName',
            InputArgument::REQUIRED,
            'If you are using json file fullPath if xml fileName'
        );
        $this->addArgument('fileLocation', InputArgument::OPTIONAL, 'file directory if using xml');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $type = $input->getArgument('type');
        $fileName = $input->getArgument('fileName');
        $fileLocation = $input->getArgument('fileLocation');

        if ($type = 'json') {
            $program = (new Client())->showProgram(new JsonToProgramConverter(), $fileName);
        } else {
            $output->writeln('You have selected wrong type');
            return Command::FAILURE;
        }
        $output->writeln(sprintf('Your workout place %s', $program['workoutPlace']));
        $output->writeln(sprintf('Type of workout %s', $program['workoutType']));
        $output->writeln(sprintf('And main exercise %s', $program['mainExercise']));
        return Command::SUCCESS;
    }
}

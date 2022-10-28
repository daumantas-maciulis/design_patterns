<?php

declare(strict_types = 1);

namespace App\Command;

use App\DesignPattern\Builder\SportProgramDirector;
use App\DesignPattern\Builder\WeighLossProgramBuilder;
use App\DesignPattern\Builder\WeightGainProgramBuilder;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class App\Command\Builder
 */
class Builder extends Command
{
    protected static $defaultName = 'builder';

    protected function configure()
    {
        $this->addArgument('type', InputArgument::REQUIRED);
        $this->addArgument('calories', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $programType = $input->getArgument('type');
        $dailyCalories = $input->getArgument('calories');

        $director = new SportProgramDirector();

        if ($programType === 'loss') {
            $program = $director->makeWeightLossProgram(new WeighLossProgramBuilder(), (int) $dailyCalories);
        } elseif ($programType === 'gain') {
            $program = $director->makeWeighGainProgram(new WeightGainProgramBuilder(), (int) $dailyCalories);
        } else {
            $output->writeln('Only loss or gain programs are available');
            return Command::FAILURE;
        }

        $output->writeln(sprintf('You will need to exercise at %s', $program->getWorkoutPlace()));
        $output->writeln(sprintf('Your main exercise will be %s', $program->getMainExercise()));
        $output->writeln(sprintf('You will need to consume %s calories', $program->getDailyCalories()));

        return Command::SUCCESS;
    }
}

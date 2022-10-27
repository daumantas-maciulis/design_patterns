<?php

declare(strict_types = 1);

namespace App\Command;

use App\DesignPattern\AbstractFactory\Factory\BrazilCountryFactory;
use App\DesignPattern\AbstractFactory\Factory\LithuaniaCountryFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class App\Command\AbstractFactory
 */
class AbstractFactory extends Command
{
    protected static $defaultName = 'abstract_factory';

    protected function configure()
    {
        $this->addArgument('country', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $selectedCountry = $input->getArgument('country');

        if ($selectedCountry === 'brazil') {
            $factory = new BrazilCountryFactory();
        } elseif ($selectedCountry === 'lithuania') {
            $factory = new LithuaniaCountryFactory();
        } else {
            $output->writeln('You only can select lithuania or brazil');
            return Command::FAILURE;
        }

        $area = $factory->createArea()->getArea();
        $population = $factory->createPopulation()->getPopulation();

        $output->writeln(sprintf("Area of %s is %s", $selectedCountry, $area));
        $output->writeln(sprintf("Population of %s is %s", $selectedCountry, $population));
        $output->writeln($factory->createDensity($area, $population)->getDensity());

        return Command::SUCCESS;
    }
}

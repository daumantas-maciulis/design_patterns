<?php

declare(strict_types = 1);

namespace App\Command;

use App\DesignPattern\Strategy\AirShippingStrategy;
use App\DesignPattern\Strategy\OrderController;
use App\DesignPattern\Strategy\RoadShippingStrategy;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class App\Command\Strategy
 */
class Strategy extends Command
{
    protected static $defaultName = 'strategy';

    protected function configure()
    {
        $this->addArgument('order', InputArgument::REQUIRED);
        $this->addArgument('shipVia', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $orderedItems = $input->getArgument('order');
        $shipVia = $input->getArgument('shipVia');

        if ($shipVia === 'air') {
            $order = new OrderController(new AirShippingStrategy());
        } elseif ($shipVia === 'road') {
            $order = new OrderController(new RoadShippingStrategy());
        } else {
            $output->writeln('You can only ship via air or road');
            return Command::FAILURE;
        }

        $output->writeln($order->createOrder($orderedItems));

        return Command::SUCCESS;
    }
}

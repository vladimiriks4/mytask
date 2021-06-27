<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class MultyRepeat extends Command
{
    protected function configure()
    {
        $this
            ->setName('multy_repeat')
            ->setDescription('show many times your text')
            ->addArgument('string', InputArgument::REQUIRED, 'string fo repeat')
            ->addOption('times', 't', InputOption::VALUE_REQUIRED, 'times repeat', 2)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $times = $input->getOption('times');
        $string = $input->getArgument('string');

        for ($i=0; $i < $times; $i++) {
            $output->writeln($input->getArgument('string'));
        }
        return Command::SUCCESS;
    }
}

<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SayHello extends Command
{
    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->setDescription('show Привет and your text')
            ->addArgument('string', InputArgument::REQUIRED, 'string to format')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $string = $input->getArgument('string');
        $output->writeln($this->prepareString($string));
        return Command::SUCCESS;
    }

    protected function prepareString($string)
    {
        return 'Привет ' . (string) $string;
    }
}

<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class Survey extends Command
{
    protected function configure()
    {
        $this
            ->setName('quest')
            ->setDescription('show your text')
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $helperName = $this->getHelper('question');
        $questionName = new Question('Введите ваше имя: ');
        $name = $helperName->ask($input, $output, $questionName);

        $helperAge = $this->getHelper('question');
        $questionAge = new Question('Введите ваш возраст: ');
        $age = $helperAge->ask($input, $output, $questionAge);

        $helperSex = $this->getHelper('question');
        $questionSex = new ChoiceQuestion(
            'Ваш пол ',
            ['М', 'Ж'],
            0
        );
        $questionSex->setErrorMessage('Sex %s is invalid');
        $sex = $helperSex->ask($input, $output, $questionSex);

        $output->writeln('you have just selected: ' . $this->prepareString($name, $age, $sex));
        return Command::SUCCESS;
    }

    protected function prepareString($name, $age, $sex)
    {
        return 'Здравствуйте, ' . (string) $name . ' Ваш возраст: ' . $age . ' Ваш пол: ' . $sex;
    }
}

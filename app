<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new  \Symfony\Component\Console\Application('command');

$app->add(new \App\SayHello());
$app->add(new \App\MultyRepeat());

$app->add(new \App\Survey());

$app->run();

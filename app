<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new  \Symfony\Component\Console\Application('do it');

$app->add(new \App\Survey());

$app->run();

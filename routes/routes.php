<?php

use function src\slimConfiguration;

$app = new \Slim\App(slimConfiguration());



$app->run();
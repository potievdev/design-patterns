<?php

require_once __DIR__ . '/../autoload.php';

$app1 = new \app\App();
$app2 = new \app\App();

// apps incrementing the same property of singleton
$app1->increment();
$app2->increment();

// Getting count returns the same values
echo $app1->getCount() . PHP_EOL;
echo $app2->getCount() . PHP_EOL;
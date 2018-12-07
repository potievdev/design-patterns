<?php

require_once __DIR__ . '/../autoload.php';

$app1 = new \app\App();
$app2 = new \app\App();

echo $app1->increment();
echo $app2->increment();
echo $app1->increment();
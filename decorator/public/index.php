<?php

require_once __DIR__ . '/../autoload.php';

$padding = boolval($_GET['padding'] ?? 0);
$redBorder = boolval($_GET['redBorder'] ?? 0);

$app = new \app\App();;
$app->render($padding, $redBorder);
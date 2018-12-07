<?php

require_once __DIR__ . '/../autoload.php';

$temperature = intval($_POST['temperature'] ?? 0);

$app = new \app\App();
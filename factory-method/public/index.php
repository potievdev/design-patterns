<?php

require_once __DIR__ . '/../autoload.php';

/**
 * @param string $shirtType
 * @return \pattern\ShirtFactory
 */
function getShirtFactory($shirtType)
{
    switch ($shirtType) {

        case 'adult':
            return new \pattern\AdultShirtFactory();
            break;

        case 'child':
            return new \pattern\ChildShirtFactory();
            break;

        default:
            echo "This type is not supported";
            die();
    }
}

if (empty($_GET['type'])) {
    echo"Parameter 'type' can not be empty. Please select adult or child theme";
    die();
}

$shirtType = $_GET['type'];

$app = new \app\App();
$shirtFactory = getShirtFactory($shirtType);
$app->render($shirtFactory);
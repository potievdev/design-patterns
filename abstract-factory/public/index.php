<?php

require_once __DIR__ . '/../autoload.php';

use app\App;
use pattern\DarkElementFactory;
use pattern\LightElementFactory;

define('DARK_THEME_NAME', 'dark');
define('LIGHT_THEME_NAME', 'light');

/**
 * @param string $themeName
 * @return \pattern\ElementFactory
 */
function getElementFactory($themeName)
{

    switch ($themeName) {

        case DARK_THEME_NAME:
            return new DarkElementFactory();
            break;

        case LIGHT_THEME_NAME:
            return new LightElementFactory();
        break;

        default:
            echo ('This theme is not supported');
            die();
    }
}

if (empty($_GET['theme'])) {
    echo "Parameter 'theme' can not be empty. Please select dark or light theme";
    die();
}

$themeName = $_GET['theme'];

$app = new App();
$elementFactory = getElementFactory($themeName);
$app->render($elementFactory);
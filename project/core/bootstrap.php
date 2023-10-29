<?php

use Src\Application;
use Src\Settings;

const DIR_CONFIG = '/../config';

require_once __DIR__ . '/../vendor/autoload.php';

function getConfigs(string $path = DIR_CONFIG): array
{
    $settings = [];
    foreach (scandir(__DIR__ . $path) as $file) {
        $name = explode('.', $file)[0];
        if (!empty($name)) {
            $settings[$name] = include __DIR__ . "$path/$file";
        }
    }
    return $settings;
}

require_once __DIR__ . '/../routes/web.php';

$app = new Application(new Settings(getConfigs()));

function app()
{
    global $app;
    return $app;
}

return $app;

//return new Application(new Settings(getConfigs()));

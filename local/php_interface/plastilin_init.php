<?php
$file_config = dirname(__FILE__) . '/../config/main_config.php';

global $APPLICATION;

if(file_exists($file_config))
    require_once $file_config;

$file_autoloader = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'autoloader.php';

if(file_exists($file_autoloader))
    require_once $file_autoloader;


if(defined('LOADERFILE')) {
    foreach(LOADERFILE as $k=>$file) {
        if(file_exists($file))
            require_once $file;
    }
}



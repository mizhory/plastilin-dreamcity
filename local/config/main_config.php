<?php
define('MAIN_CONFIG_INCLUDED', true);

define('LOCAL_DIR', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'local/');

$file_load = [
    LOCAL_DIR . 'include/assets.php',
    LOCAL_DIR . 'include/handlers.php'
];
define('LOADERFILE', $file_load);
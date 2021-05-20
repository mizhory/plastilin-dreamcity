<?php
//DevilOper Autoloader Copyright all right reserved 2021
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace).DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className).'.php';

    if (file_exists($_SERVER['DOCUMENT_ROOT'].'/local/classes/'.$fileName) && !class_exists($className)) {
        require $_SERVER['DOCUMENT_ROOT'].'/local/classes/'.$fileName;
    }
}
spl_autoload_register('autoload');


$etc_vendor = $_SERVER['DOCUMENT_ROOT'] . '/local/vendor/autoload.php';
if(file_exists($etc_vendor))
    require_once $etc_vendor;
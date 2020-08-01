<?php
spl_autoload_register(function($className) {
    $fileName = __DIR__.DIRECTORY_SEPARATOR.str_replace('\\', '/', $className).'.php';
    if(file_exists($fileName)) require_once $fileName;
});
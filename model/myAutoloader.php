<?php
spl_autoload_register('myautoloader');

function myAutoloader($className)
{
    $path = "model/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;

    include_once $fullPath;
}
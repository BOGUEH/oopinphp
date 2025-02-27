<?php 

spl_autoload_register('myAutoloader');// the myAutoload is a function. but we put it in quote

/*
function myAutoloader($classname) { 
    $path = 'classes/';
    $extension = '.class.php';
    $fullpath = $path.$classname.$extension;

    include_once $fullpath;
}
*/

function myAutoloader($classname) { 
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url,'includes') !== false) {

        $path = '../classes/';

    } else {
        $path = './classes/';
        
    }
    $extension = '.class.php';
    require_once $path . $classname . $extension;
}
?>
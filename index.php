<?php

function __autoload($class){
	$arrFolder = ["lib", "controller", "model"];

	foreach($arrFolder as $folder){
        if(file_exists("$folder/$class.php")){
            require_once "$folder/$class.php";
        }
    }
}

function pre($content){
    echo "<pre>";
    var_dump($content);
    echo "</pre>";
}

function pred($content){
    echo "<pre>";
    var_dump($content);
    exit;
}

require_once "config/Boot.php";

$boot = new Boot();
$boot->init();
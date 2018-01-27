<?php

function __autoload($class){
	$arrFolder = ["lib", "controller"];

	foreach($arrFolder as $folder){
        if(file_exists("$folder/$class.php")){
            require_once "$folder/$class.php";
        }
    }
}

require_once "config/Boot.php";

$boot = new Boot();
$boot->init();
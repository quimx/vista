<?php

class Boot{

    function init(){
        $controller = null;
        $action     = null;
        $arrParms   = array();

        $arrPieces = explode('/', $_SERVER['REQUEST_URI']);
        $pivot = array();
        foreach($arrPieces as $key => $piece){
            if(empty($piece)){
                unset($key);
            }else{
                $pivot[] = $piece;
            }
        }

        $arrPieces = $pivot;
        $ctr = count($arrPieces);
        switch (true){
            case $ctr == 0:
                $controller = 'HomeController';
                $action = 'index';
                break;
            case $ctr == 1:
                $controller = ucwords(strtolower($arrPieces[0])).'Controller';
                $action = 'index';
                break;
            case $ctr >= 2:
                foreach($arrPieces as $key => $piece){
                    if($key == 0){
                        $controller = ucwords(strtolower($piece)).'Controller';
                    }elseif($key == 1){
                        $action = $piece;
                    }else{
                        $arrParms[] = $piece;
                    }
                }
        }

        if(class_exists($controller)){
            $ct = new $controller();
            $ct->$action();
        }else{
            $ct = new HomeController();
            $ct->error();
        }
    }
}
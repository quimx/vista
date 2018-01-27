<?php
/**
 * Created by PhpStorm.
 * User: Heliaquim
 * Date: 27/01/2018
 * Time: 17:53
 */

class View{

    function rend($file, $arrVar = array()){
        extract($arrVar);

        ob_start();
        include "view/$file";
        return ob_get_clean();
    }
}
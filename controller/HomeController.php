<?php
/**
 * Created by PhpStorm.
 * User: Heliaquim
 * Date: 27/01/2018
 * Time: 18:34
 */

class HomeController extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        echo $this->view->rend('home/index.php');
    }

    public function error(){
        header("HTTP/1.0 404 Not Found");
    }
}
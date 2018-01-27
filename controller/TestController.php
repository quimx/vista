<?php

class TestController extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    public function test(){
        echo $this->view->rend('test/test.php', array('test', 'valor'));
    }


}
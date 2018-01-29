<?php
/**
 * Created by PhpStorm.
 * User: Heliaquim
 * Date: 27/01/2018
 * Time: 18:34
 */

class HomeController extends Controller{

    private $params = null;

    function __construct($arrParms = null)
    {
        $this->params = $arrParms;
        parent::__construct();
    }

    public function index(){
        $dbLista = new ListaModel();
        $lista = $dbLista->getLista();

        echo $this->view->rend('home/index.php', array('arrLista' => $lista));
    }

    public function error(){
        header("HTTP/1.0 404 Not Found");
    }
}
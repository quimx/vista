<?php
/**
 * Created by PhpStorm.
 * User: Heliaquim
 * Date: 29/01/2018
 * Time: 12:37
 */

class ListaController extends Controller{

    private $params = null;

    function __construct($arrParms = null)
    {
        $this->params = $arrParms;

        parent::__construct();
    }

    public function finalizar(){
        $dbLista = new ListaModel();
        $dbLista->finalizaItem($this->params[0]);

        header('Location: /');
    }

    public function remover(){
        $dbLista = new ListaModel();
        $dbLista->removeItem($this->params[0]);

        header('Location: /');
    }
}
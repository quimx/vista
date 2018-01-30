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

    public function cadastrar(){

        if(!empty($_POST)){
            $tarefa = $_POST['tarefa'];
            $dataLimite = str_replace('T', ' ', $_POST['dataLimite']);

            $dbLista = new ListaModel();
            $dbLista->cadastrarItem($tarefa, $dataLimite);

            header('Location: /');
        }

        $this->view->rend('lista/cadastrar.php');
    }

    public function editar(){
        $dbLista = new ListaModel();

        if(!empty($_POST)){
            $dbLista->editarItem($_POST);

            header('Location: /');
        }

        $arrDadosItem = $dbLista->getItemPorId($this->params[0]);

        $this->view->rend('lista/editar.php', array('arrDadosItem' => $arrDadosItem[0]));
    }
}
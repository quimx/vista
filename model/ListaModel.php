<?php
/**
 * Created by PhpStorm.
 * User: Heliaquim
 * Date: 27/01/2018
 * Time: 20:00
 */

class ListaModel extends Model{
    private $table = null;

    function __construct(){
        parent::__construct();
        $this->table = "lista";
    }

    public function getLista(){
        $sql = "select *
                from {$this->table}
                where lis_status = 1 
                and lis_finalizado_em is null";

        $con = $this->getCon();
        $sth = $con->prepare($sql);
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getListaFinalizado(){
        $sql = "select * 
                from {$this->table}
                where lis_status = 1 
                and lis_finalizado_em is not null";

        $con = $this->getCon();
        $sth = $con->prepare($sql);
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function removeItem($id){
        $sql = "update {$this->table} 
                set lis_status = 0
                where lis_id = $id";

        $con = $this->getCon();
        $sth = $con->prepare($sql);
        $sth->execute();
    }

    public function finalizaItem($id){
        $date = date('Y-m-d H:i:s');

        $sql = "update {$this->table} 
                set lis_finalizado_em = '{$date}' 
                where lis_id = $id";

        $con = $this->getCon();
        $sth = $con->prepare($sql);
        $sth->execute();
    }

    public function cadastrarItem($tarefa, $dataLimite){
        $sql = "insert into {$this->table} (lis_descricao, lis_data_limite)
                values ('{$tarefa}', '{$dataLimite}')";

        $con = $this->getCon();
        $sth = $con->prepare($sql);
        $sth->execute();
    }

    public function getItemPorId($id){
        $sql = "select lis_id, lis_descricao, lis_data_limite
                from {$this->table}
                where lis_id = $id";

        $con = $this->getCon();
        $sth = $con->prepare($sql);
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editarItem($params){
        $id = $params['idItem'];
        $tarefa = $params['tarefa'];
        $dataLimite = $params['dataLimite'];

        $sql = "update {$this->table} 
                set lis_descricao = '{$tarefa}', 
                    lis_data_limite = '{$dataLimite}' 
                where lis_id = $id";

        $con = $this->getCon();
        $sth = $con->prepare($sql);
        $sth->execute();
    }
}
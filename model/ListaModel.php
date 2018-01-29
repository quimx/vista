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
                where lis_status = 1";

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
}
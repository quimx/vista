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
                from {$this->table}";

        $con = $this->getCon();
        $sth = $con->prepare($sql);
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}
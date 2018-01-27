<?php

include_once "Database.php";

class Model{
	
	/**
	* @var Connection
	*/
	private $pdo = null;
	private $con = null;

	function __construct(){
		$this->pdo = new Database();
		$this->con = $this->pdo->connect();
		$this->con->query("SET NAMES 'UTF8'");
	}
	
	function getCon(){
		return $this->con;
	}
}
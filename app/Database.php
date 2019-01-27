<?php
namespace jcvignoud\TP_POO_PremiersPas;

use \PDO;

class Database{
	private $_db_name;
	private $_db_user;
	private $_db_pass;
	private $_dbhost;
	private $_pdo;

	public function __construct($_db_name,$_db_user='root',$_db_pass='',$_db_host='localhost'){
		$this->_db_name = _db_name;
		$this->_db_user = _db_user;
		$this->_db_pass = _db_pass;
		$this->_db_host = _db_host;
	}

	private function getPDO(){
		if(NULL===$this->_pdo)
		{
			$this->_pdo = new PDO('musql:dbname=TP_POO_PHP','root','');
			$this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
		}
		else
		{
			//Nothing to do
		}
		return $this->_pdo;
	}
}
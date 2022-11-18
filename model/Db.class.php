<?php

/**
 * Trida pro pripojeni do databaza
 */
class Db{

	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "test_carlos";
	private $conn;
	
	public function getConn(){
		return new mysqli($this->servername, $this->username, $this->password, $this->dbname);
	}

}

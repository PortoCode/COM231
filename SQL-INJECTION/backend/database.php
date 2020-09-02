<?php
include_once "settings.php";

class Database extends Settings{
	var $conn;

	function __construct() {
		try {
			$connection = "host=$this->host port=$this->port dbname=$this->db user=$this->user password=$this->pass";
			$this->conn = pg_connect($connection);
		} catch (Exception $e) {
			echo "error connection to Database";
		}
	}

	function select($query) {
		$result =  pg_query($this->conn, $query);
		return $result;
	}
}
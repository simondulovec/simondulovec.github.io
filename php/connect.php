<?php
class DatabaseConnect{

	private static $instance = null;
	private $conn;
	private $servername = "localhost";
	private $username = "simon";
	private $password = "simon44695";
	private $db_name= "attendance";

	private function __construct(){
	$this->conn = new mysqli($this->servername, $this->username, $this->password,$this->db_name);
	}

	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new DatabaseConnect();
		}
		return self::$instance;
	}

	public function getConn(){
		return $this->conn;
	}
}
?>


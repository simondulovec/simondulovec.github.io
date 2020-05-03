<?php
class DatabaseConnect{

	private static $instance = null;
	private $conn;
	private $servername = "dulo.mysql.database.azure.com";
	private $username = "simon@dulo";
	private $password = "Dulovec44695";
	private $db_name= "attendance";

	private function __construct(){
		$this->conn = new mysqli($this->servername, $this->username, $this->password,$this->db_name);
		$this->conn->set_charset("utf8mb4");
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


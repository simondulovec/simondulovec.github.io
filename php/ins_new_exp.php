<?php
/*copyright 2020 Šimon Dulovec*/
require "connect.php";
$instance = DatabaseConnect::getInstance();
$conn=$instance->getConn();
$sql="INSERT INTO pozicie(nazov)
	VALUES('".$_POST["expertise"]."')";
$result = $conn->query($sql);
$response = array();
$response["state"]=$result;

echo json_encode($response);
?>

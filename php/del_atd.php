<?php
/*copyright 2020 Šimon Dulovec*/
require "connect.php";
require "create_conn.php";

$sql = "DELETE FROM dochadzky WHERE id=".$_POST["atd_id"]." AND
	odchod IS NOT NULL";
$conn->query($sql);

$response=array();

if ($conn->affected_rows == 0){
	$response["state"]="error";
}else if ($conn->affected_rows == 1){
	$response["state"]="delete_succesfull";
}

echo json_encode($response);

?>

<?php
require "connect.php";
require "create_conn.php";

$sql = "DELETE FROM dochadzky WHERE id=".$_POST["atd_id"]." AND
	odchod IS NOT NULL";
$conn->query($sql);

$response=array();
$response["state"]="delete_succesfull";

if ($conn->affected_rows == 0){
	$response["state"]="error";
}

echo json_encode($response);

?>

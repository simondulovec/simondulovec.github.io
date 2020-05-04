<?php
require "connect.php";
require "create_conn.php";

$sql = "UPDATE dochadzky SET zaplatene=1 WHERE id=".$_POST["atd_id"]." AND odchod IS NOT NULL";

$conn->query($sql);

$response=array();
$response["state"]="update_succesfull";

if ($conn->affected_rows == 0){
	$response["state"]="no_changes";
}

echo json_encode($response);

?>

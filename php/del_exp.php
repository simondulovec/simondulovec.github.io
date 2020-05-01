<?php
require "connect.php";
require "create_conn.php";
$sql="DELETE FROM pozicie WHERE id=(".$_POST["exp_id"].")";
$conn->query($sql);
$response =array();

if ($conn-> affected_rows == -1){
	$response["state"]="error";
}else{
	$response["state"]="success";
}

echo json_encode($response);

?>

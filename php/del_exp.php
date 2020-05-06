<?php
/*copyright 2020 Šimon Dulovec*/
require "connect.php";
require "create_conn.php";
$sql="SELECT del_exp(".$_POST["exp_id"].") as rem_id";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$response = array();
$response["state"] = $row["rem_id"]; 

echo json_encode($response);

?>

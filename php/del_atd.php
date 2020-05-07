<?php
/*copyright 2020 Šimon Dulovec*/
require "connect.php";
require "create_conn.php";

$sql = "SELECT del_atd(".$_POST["atd_id"].") AS del_ret";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$response=array();
$response["state"] = $row["del_ret"];

echo json_encode($response);

?>

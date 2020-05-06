<?php
/*copyright 2020 Šimon Dulovec*/
require "connect.php";
require "create_conn.php";

$sql = "SELECT check_out('".$_POST["emp_card_id"]."') AS ret_val";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$response=array();
$response["state"] = $row["ret_val"];

echo json_encode($response);

?>

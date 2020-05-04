<?php
require "connect.php";
require "create_conn.php";

$sql = "SELECT cash_out('".$_POST["emp_id"]."','".$_POST["from"]."','".$_POST["to"]."') as csh_ret";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$response = array();
$response["state"]=$row["csh_ret"];

echo json_encode($response);

?>

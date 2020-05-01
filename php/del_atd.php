<?php
require "connect.php";
require "create_conn.php";

$sql = "DELETE FROM dochadzky WHERE id=".$_POST["atd_id"]."";
$conn->query($sql);
?>

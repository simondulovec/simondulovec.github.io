<?php
require "connect.php";
require "create_conn.php";
$sql = "UPDATE pozicie SET nazov = '".$_POST["exp_chg"]."'
	WHERE nazov = '".$_POST["ori_exp"]."'";
$conn->query($sql);
?>

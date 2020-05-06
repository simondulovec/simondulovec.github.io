<?php
/*copyright 2020 Šimon Dulovec*/
require "connect.php";
require "create_conn.php";
$sql = "UPDATE pozicie SET nazov = '".$_POST["exp_chg"]."'
	WHERE id = '".$_POST["exp_id"]."'";
$conn->query($sql);
?>

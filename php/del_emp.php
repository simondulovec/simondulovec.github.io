<?php
/*copyright 2020 Šimon Dulovec*/
require "connect.php";
require "create_conn.php";
$sql="DELETE FROM osoby WHERE id=".$_POST["emp_id"]."";
$conn->query($sql);

?>

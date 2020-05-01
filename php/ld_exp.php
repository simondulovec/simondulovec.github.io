<?php

require "connect.php";
require "create_conn.php";
$sql = "SELECT * FROM pozicie";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
	echo "<div class= 'exp_lt_ele'>
		<button class='exp_lt_btn' value=".$row["id"].">".$row["nazov"]."</button>
		<button class='dd_btn edt_exp' value=".$row["nazov"].">~</button>
		<button class='dd_btn rem_exp' value=".$row["id"].">‒</button>
              </div>";
}
?>

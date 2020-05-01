<?php

require "connect.php";
require "create_conn.php";
$sql = "SELECT * FROM pozicie";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
	echo "<div class= 'exp_lt_ele'>
		<div class='exp_info'>
			<button class='exp_lt_btn' value=".$row["id"].">".$row["nazov"]."</button>
			<button class='dd_btn edt_exp'>~</button>
			<button class='dd_btn rem_exp' value=".$row["id"].">‒</button>
		</div>
		<div class='edit_exp'>
			<input class='big_ipt exp_chg' value=".$row["nazov"]." type='text'>
			<button class='dd_btn cfm_edt_exp' value=".$row["id"].">~</button>
		</div>
              </div>";
}
?>

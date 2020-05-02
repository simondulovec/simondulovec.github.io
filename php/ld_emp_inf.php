<?php
require "connect.php";
require "create_conn.php";

$sql = "SELECT * FROM osoby WHERE id=".$_POST["emp_id"]."";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

echo "<div class='add_inf_name'><span>".$row["meno"]."</span></div>
	<div class='add_inf_per'>
	</div>
	<div class='add_inf_wk'>
	</div>
	<div class='add_inf_btns'>
	<button class='mini_btn can_add_inf'>
		<img class='mini_img' src='img/confirm1.png'>
	</button>
	</div>";
?>

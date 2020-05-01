<?php
require "connect.php";
require "create_conn.php";

$sql= "SELECT osoby.id, 
	      osoby.meno, 
	      DATE_FORMAT(osoby.datum_narodenia,'%e.%c.%Y') AS formatted_date, 
	      pozicie.nazov 
	      FROM osoby JOIN pozicie ON (osoby.pozicia=pozicie.id)";
$result = $conn->query($sql);

if ($result->num_rows>0){
	while ($row=$result->fetch_assoc()){
		echo "<div class='emp_lt_item'>
			<div class='emp_lt_name emp_item_ele def_csr'><span>".$row["meno"]."</span></div>
			<div class='emp_lt_date emp_item_ele def_csr'><span>".$row["formatted_date"]."</span></div>
			<div class='emp_lt_exp emp_item_ele default_cursor'><span>".$row["nazov"]."</span></div>
			<button class='dd_btn'>i</button>
			<button class='dd_btn'>~</button>
			<button class='dd_btn rem_emp' value=".$row["id"].">‒</button>
	             </div>";
	}
}
else{
echo "<div class='empty_lt'><div>Prázdny zoznam</div></div>";
}
?>

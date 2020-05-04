<?php
require "connect.php";
require "create_conn.php";

$min_date="1.1.1900";
$max_date="1.1.9999";

$emp_id_v="";
$from_v="";
$to_v="";

$sum=0;

$response = array();

if ($_POST["emp_id"]=="*"){
	$_POST["emp_id"]="";
	$emp_id_v="*";

}else{
	$sql = "SELECT * FROM osoby WHERE id=".$_POST["emp_id"]." OR id_karty = '".$_POST["emp_id"]."'";
	$result =  $conn->query($sql);
	if ($result-> num_rows == 0){
		echo "<span class='fade_in'>Neznáme id</span>";
		exit;
	}
}

if ($_POST["from"]=="*"){
	$_POST["from"]=$min_date;
	$from_v="*";
}
if ($_POST["to"]=="*"){
	$_POST["to"]=$max_date;
	$to_v="*";
}

$sql = "SELECT
	osoby.plat,
	TIMEDIFF(dochadzky.odchod, dochadzky.prichod) as time FROM osoby
	JOIN dochadzky ON (osoby.id=dochadzky.osoba AND dochadzky.odchod IS NOT NULL AND dochadzky.zaplatene=0) AND
	(osoby.id LIKE '%".$_POST["emp_id"]."%' OR
	osoby.id_karty LIKE '".$_POST["emp_id"]."') AND
	DATE(dochadzky.prichod) >= STR_TO_DATE('".$_POST["from"]."','%e.%c.%Y') AND
	DATE(dochadzky.odchod) <= STR_TO_DATE('".$_POST["to"]."','%e.%c.%Y')";

$result = $conn->query($sql);

if ($result -> num_rows >0){

	while($row = $result->fetch_assoc()){
		$time = explode(":",$row["time"]);
		$h = intval($time[0]);
		$m = intval($time[1])/60;
		$s = intval($time[2])/3600;
		$salary = round($row["plat"] * ($h + $m + $s),2);
		$sum += $salary;
	}
	echo "<span class='fade_in'>".$sum." €</span>
		<button class='sml_btn fade_in' id='cash_out_btn' value='".$emp_id_v."|".$from_v."|".$to_v."'>
		<img class='sml_img' src='img/calculator.png'>
		</button>";
}

else{
	echo "<span class='fade_in'>0 €</span>";
}

?>

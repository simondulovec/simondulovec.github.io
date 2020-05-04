<?php
require "connect.php";
require "create_conn.php";

$min_date="1.1.1900";
$max_date="1.1.9999";

$sum=0;

if ($_POST["data"]=="v"){
	$_POST["data"]="";
}if ($_POST["from"]=="v"){
	$_POST["from"]=$min_date;
}if ($_POST["to"]=="v"){
	$_POST["to"]=$max_date;
}

$sql = "SELECT osoby.meno,
	osoby.plat,
	pozicie.nazov,
	TIMEDIFF(dochadzky.odchod, dochadzky.prichod) as time FROM osoby
	JOIN dochadzky ON (osoby.id=dochadzky.osoba AND dochadzky.odchod IS NOT NULL AND dochadzky.zaplatene=0)
	JOIN pozicie ON (osoby.pozicia=pozicie.id) AND
	(osoby.id LIKE '%".$_POST["data"]."%' OR
	osoby.id_karty LIKE '".$_POST["data"]."' OR
	pozicie.nazov LIKE '%".$_POST["data"]."%') AND
	DATE(dochadzky.prichod) >= STR_TO_DATE('".$_POST["from"]."','%e.%c.%Y') AND
	DATE(dochadzky.odchod) <= STR_TO_DATE('".$_POST["to"]."','%e.%c.%Y')";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
	$time = explode(":",$row["time"]);
	$h = intval($time[0]);
	$m = intval($time[1])/60;
	$s = intval($time[2])/3600;
	$salary = round($row["plat"] * ($h + $m + $s),2);
	$sum += $salary;
}

echo "<span>".$sum." €</span>";

?>

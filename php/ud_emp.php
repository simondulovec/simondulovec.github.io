<?php

require "connect.php";
require "create_conn.php";

$sql = "UPDATE osoby
	SET id_karty ='".$_POST["card_id"]."', 
		meno = '".$_POST["emp_nm"]."', 
		plat = ".$_POST["salary"].", 
		datum_narodenia = STR_TO_DATE('".$_POST["date_of_bh"]."','%e.%c.%Y'), 
		datum_nastupu = STR_TO_DATE('".$_POST["st_date"]."','%e.%c.%Y'), 
		pozicia = ".$_POST["exp_id"].", 
		mesto = '".$_POST["city"]."', 
		ulica = '".$_POST["street"]."', 
		psc = '".$_POST["stt_num"]."', 
		tel_cislo = '".$_POST["phone_num"]."',
		poznamky = '".$_POST["add_info"]."'
		WHERE id=".$_POST["emp_id"]."";

$result = $conn->query($sql);
$response=array();

$response["state"]="update_error";
	
if ($conn->affected_rows == 0){
	$response["state"] = "no_changes";
}else if ($conn->affected_rows == 1){
	$response["state"] = "update_succesfull";
}

echo json_encode($response);

?>

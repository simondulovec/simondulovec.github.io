<?php

require "connect.php";
require "create_conn.php";

$sql ="INSERT INTO osoby(id_karty, meno, plat, datum_narodenia, datum_nastupu, pozicia, mesto, ulica, psc, tel_cislo ,poznamky)
	VALUES ('".$_POST["card_id"]."',
		'".$_POST["emp_nm"]."',
		".$_POST["salary"].",
		STR_TO_DATE('".$_POST["date_of_bh"]."','%e.%c.%Y'),
		STR_TO_DATE('".$_POST["st_date"]."','%e.%c.%Y'),
		".$_POST["exp_id"].",
		'".$_POST["city"]."',
		'".$_POST["street"]."',
		'".$_POST["stt_num"]."',
		'".$_POST["phone_num"]."',
		'".$_POST["add_info"]."')";

$result = $conn->query($sql);
$response=array();

$response["state"]=$result;

	/*($result->affected)*/
echo json_encode($response);

?>

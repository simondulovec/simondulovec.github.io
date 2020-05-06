<?php
/*copyright 2020 Šimon Dulovec*/
require "connect.php";
require "create_conn.php";

$sql = "SELECT ud_emp(
	".$_POST["emp_id"].",
	'".$_POST["card_id"]."',
	'".$_POST["emp_nm"]."', 
	'".$_POST["city"]."',
	'".$_POST["street"]."',
	'".$_POST["stt_num"]."',
	".$_POST["exp_id"].",
	".$_POST["salary"].",
	STR_TO_DATE('".$_POST["date_of_bh"]."','%e.%c.%Y'),
	STR_TO_DATE('".$_POST["st_date"]."','%e.%c.%Y'),
	'".$_POST["phone_num"]."',
	'".$_POST["add_info"]."') AS ud_ret";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$response=array();
$response["state"]=$row["ud_ret"];
	
echo json_encode($response);

?>

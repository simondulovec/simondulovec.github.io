<?php
require "connect.php";
require "create_conn.php";

$sql="SELECT osoby.id_karty,
		osoby.id,
		osoby.meno,
		DATE_FORMAT(osoby.datum_narodenia, '%e.%c.%Y') AS dt_of_bh,
		DATE_FORMAT(osoby.datum_nastupu, '%e.%c.%Y') AS st_date,
		osoby.mesto,
		osoby.ulica,
		osoby.psc,
		pozicie.id AS id_poz,
		pozicie.nazov AS nazov_poz,
		osoby.plat,
		osoby.tel_cislo,
		osoby.poznamky
		FROM osoby JOIN pozicie ON (osoby.pozicia=pozicie.id)
		AND (osoby.id=".$_POST["emp_id"].")";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

$response = array();

$response["id"] = $row["id"];
$response["id_karty"] = $row["id_karty"];
$response["meno"] = $row["meno"];
$response["datum_narodenia"] = $row["dt_of_bh"];
$response["datum_nastupu"] = $row["st_date"];
$response["mesto"] = $row["mesto"];
$response["ulica"] = $row["ulica"];
$response["psc"] = $row["psc"];
$response["id_poz"] = $row["id_poz"];
$response["nazov_poz"] = $row["nazov_poz"];
$response["plat"] = $row["plat"];
$response["tel_cislo"] = $row["tel_cislo"];
$response["poznamky"] = $row["poznamky"];

echo json_encode($response);

?>

<?php
/*copyright 2020 Šimon Dulovec*/
require "connect.php";
require "create_conn.php";

$sql = "SELECT osoby.id, 
		osoby.id_karty, 
		osoby.meno, 
		DATE_FORMAT(osoby.datum_narodenia, '%e.%c.%Y') as fm_date_bh, 
		osoby.ulica, 
		osoby.mesto, 
		osoby.psc,
		osoby.plat,
		DATE_FORMAT(osoby.datum_nastupu, '%e.%c.%Y') as fm_st_date,
		osoby.tel_cislo,
		osoby.poznamky,
		pozicie.nazov as nazov_poz
		FROM osoby JOIN pozicie ON(osoby.pozicia=pozicie.id) 
		AND (osoby.id=".$_POST["emp_id"].")";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

if ($row["poznamky"]==""){
	$row["poznamky"]="Žiadne poznámky";
}

echo "<div class='add_inf_name'><span>".$row["meno"]."</span></div>
	<div class='add_inf_per'>
		<div class='date_of_bh_inf'><span>Dátum narodenia: ".$row["fm_date_bh"]."</span></div>
		<div class='adr_add_inf'>
			<div class='adr_inf'>
				<div class='city_inf'><span>Mesto: ".$row["mesto"]."</span></div>
				<div class='street_inf'><span>Ulica: ".$row["ulica"]."</span></div>
				<div class='stt_num_inf'><span>PSČ: ".$row["psc"]."</span></div>
				<div class='phone_num_inf'><span>Tel.číslo: ".$row["tel_cislo"]."</span></div>
			</div>
			<div class='ext_add_inf'>
				<div class='ext_hd'>Poznámky: </div>
				<div class='ext_inf'><span>".$row["poznamky"]."</span></div>
			</div>
		</div>
	</div>
	<div class='add_inf_wk'>
		<div class='st_date_inf'><span>Dátum nástupu: ".$row["fm_st_date"]."</span></div>
		<div class='wk_inf'>
			<div class='id_inf'><span>Id: ".$row["id"]."</span></div>
			<div class='card_id_inf'><span>Id karty: ".$row["id_karty"]."</span></div>
			<div class='exp_inf'><span>Pozícia: ".$row["nazov_poz"]."</span></div>
			<div class='salary_inf'><span>Plat: ".$row["plat"]." EUR/hod</span></div>
		</div>
	</div>
	<div class='add_inf_btns'>
	<button class='mini_btn can_add_inf'>
		<img class='mini_img' src='img/confirm.png'>
	</button>
	</div>";
?>

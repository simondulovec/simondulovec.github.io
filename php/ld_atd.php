<?php
require "connect.php";
require "create_conn.php";
require "functions.php";

$sql= "SELECT osoby.id_karty,
	      dochadzky.id,
	      dochadzky.zaplatene,	
	      DATE_FORMAT(DATE(dochadzky.prichod),'%e.%c.%Y') as check_in_date,
	      TIME(dochadzky.prichod) as check_in_time,
	      DAYNAME(dochadzky.prichod) as check_in_day,
	      DATE_FORMAT(DATE(dochadzky.odchod),'%e.%c.%Y') as check_out_date,
	      TIME(dochadzky.odchod) as check_out_time,
	      DAYNAME(dochadzky.odchod) as check_out_day,
	      TIMEDIFF(dochadzky.odchod,dochadzky.prichod) as time
	      FROM osoby JOIN dochadzky ON (osoby.id=dochadzky.osoba)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while ($row=$result->fetch_assoc()){
		$check_out="Nezaregistrovaný";
	if ($row["time"]==""){
		$row["time"]="Prázdne";
	}
	if ($row["check_out_time"]!=""){
		$check_out=convert_day('check_out_day',$row).", ".$row['check_out_date']." ".$row['check_out_time'];
	}
	if ($row["zaplatene"]==0){
		$row["zaplatene"]="Nezaplatené";
	}else if ($row["zaplatene"]==1){
		$row["zaplatene"]="Zaplatené";
	}

	echo "<div class='atd_lt_item fade_in'>
		<div class='atd_info'>
			<div class='atd_lt_name atd_item_ele def_csr'><span>".$row["id_karty"]."</span></div>
			<div class='atd_lt_check_in atd_item_ele def_csr'><span>".convert_day("check_in_day",$row).", ".$row["check_in_date"]." ".$row["check_in_time"]."</span></div>
			<div class='atd_lt_check_out atd_item_ele def_csr'><span>".$check_out."</span></div>
			<div class='atd_lt_time atd_item_ele def_csr'><span>".$row["time"]."</span></div>
			<div class='atd_lt_csh_out atd_item_ele def_csr'><span>".$row["zaplatene"]."</span></div>
			<button class='dd_btn edit_atd' value=".$row["id"].">~</button>
			<button class='dd_btn cash_out' value=".$row["id"].">€</button>
			<button class='dd_btn rem_atd' value=".$row["id"].">‒</button>
		</div>

		<div class='edit_atd_mn'>
			<input class='big_ipt check_in_ipt' type='text' value='".$row["check_in_date"]." ".$row["check_in_time"]."'>
			<input class='big_ipt check_out_ipt' type='text' value='".$row["check_out_date"]." ".$row["check_out_time"]."'>
			<button class='dd_btn cfm_edit_atd' value=".$row["id"].">~</button>

		</div>

	      </div>";
}
}
else{
	echo "<div class='empty_lt ept_atd_lt fade_in'><div>Prázdny zoznam</div></div>";
}
?>

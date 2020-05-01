<?php
require "connect.php";
require "create_conn.php";
require "functions.php";


$sql="SELECT osoby.meno,
      	     DATE_FORMAT(DATE(dochadzky.prichod),'%e.%c.%Y') as check_in_date,
	     TIME(dochadzky.prichod) as check_in_time,
	     DAYNAME(dochadzky.prichod) as check_in_day,
	     DATE_FORMAT(DATE(dochadzky.odchod),'%e.%c.%Y') as check_out_date,
	     TIME(dochadzky.odchod) as check_out_time,
	     DAYNAME(dochadzky.odchod) as check_out_day, 
	     TIMEDIFF(dochadzky.odchod,dochadzky.prichod) as time
	     FROM osoby 
	     JOIN dochadzky ON(osoby.id=dochadzky.osoba)
	     JOIN pozicie ON (osoby.pozicia=pozicie.id)
      	     WHERE osoby.id_karty LIKE '%".$_POST["sch_data"]."%' OR
	     osoby.meno LIKE '%".$_POST["sch_data"]."%' OR
	     DATE_FORMAT(osoby.datum_narodenia,'%e.%c.%Y') LIKE '%".$_POST["sch_data"]."%' OR
	     osoby.datum_nastupu LIKE '%".$_POST["sch_data"]."%' OR
	     pozicie.nazov LIKE '%".$_POST["sch_data"]."%' OR
	     DATE_FORMAT(dochadzky.prichod,'%e.%c.%Y %H:%i%s') LIKE '%".$_POST["sch_data"]."%' OR
	     DATE_FORMAT(dochadzky.odchod,'%e.%c.%Y %h:%i:%d') LIKE '%".$_POST["sch_data"]."%' OR
	     TIMEDIFF(dochadzky.odchod,dochadzky.prichod) LIKE '%".$_POST["sch_data"]."%'";

$result=$conn->query($sql);

if ($result->num_rows > 0){

while($row=$result->fetch_assoc()){
echo "<div class='atd_lt_item'>	      
	<div class='atd_info'>
			<div class='atd_lt_name atd_item_ele def_csr'><span>".$row["meno"]."</span></div>
			<div class='atd_lt_check_in atd_item_ele deft_csr'><span>".convert_day("check_in_day",$row).", ".$row["check_in_date"]." ".$row["check_in_time"]."</span></div>
			<div class='atd_lt_check_out atd_item_ele def_csr'><span>".convert_day("check_out_day",$row).", ".$row["check_out_date"]." ".$row["check_out_time"]."</span></div>
			<div class='atd_lt_time atd_item_ele def_csr'><span>".$row["time"]."</span></div>
			<button class='dd_btn edit_atd' value=".$row["id"].">~</button>
			<button class='dd_btn rem_atd' value=".$row["id"].">-</button>

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
	echo "<div class='empty_lt'><div>Žiadna zhoda</div></div>";
}
?>

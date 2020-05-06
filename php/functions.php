<?php
/*copyright 2020 Šimon Dulovec*/
function convert_day($when,$row){
	$day="";
	if ($row[$when]=="Monday"){
		$day="Pon";
	}else if ($row[$when]=="Tuesday"){
		$day="Uto";
	}else if ($row[$when]=="Wednesday"){
		$day="Str";
	}else if ($row[$when]=="Thursday"){
		$day="Štv";
	}else if ($row[$when]=="Friday"){
		$day="Pia";
	}else if ($row[$when]=="Saturday"){
		$day="Sob";
	}else if ($row[$when]=="Sunday"){
		$day="Ned";
	}
	return $day;
}

?>

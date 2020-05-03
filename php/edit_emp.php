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

echo "<div class='mn_ctn'>
		<div class='ctd crt_emp_mn'>	
			<div class='l_r_panel'>
				<div class=l_panel>		
					<input class='big_ipt from_top card_id' type='text' placeholder='Id (10 cifier)' value=".$row["id_karty"].">
					<input class='big_ipt from_top emp_nm' type='text' placeholder='Meno a priezvisko' value='".$row["meno"]."'>
					<input class='big_ipt from_top date_of_bh' type='text' placeholder='Dátum narodenia' value=".$row["dt_of_bh"].">
					<input class='big_ipt from_top city' type='text' placeholder='Mesto/Obec' value='".$row["mesto"]."'>
					<input class='big_ipt from_top street' type='text' placeholder='Ulica' value='".$row["ulica"]."'>
					<input class='big_ipt from_top stt_num' type='text' placeholder='PSČ' value=".$row["psc"].">
				</div>

				<div class='r_panel'>
					<div class='from_top select'>
						<button class='sh_exp_lt' value=".$row["id_poz"].">".$row["nazov_poz"]."</button>
						<button class='dd_btn sh_exp_mn'>+</button>
						<div class='exp_lt'>
							<div class='exp_scr_lt'>
							</div>
						</div>
						<div class='exp_mn'>
							<div class='exp_sli_mn'>
								<input class='big_ipt new_exp' type='text' placeholder='Pozícia (bez diakritiky)'>
								<button class='dd_btn crt_exp'>+</button>
							</div>
						</div>
					</div>
					<input class='big_ipt from_top salary' type='text' placeholder='EUR/hod' value=".$row["plat"].">
					<input class='big_ipt from_top st_date' type='text' placeholder='Dátum nástupu' value=".$row["st_date"].">
					<input class='big_ipt from_top phone_num' type='text' placeholder='Tel.číslo (+421...)' value=".$row["tel_cislo"].">
					<textarea class='add_info from_top' placeholder='Poznámky'>".$row["poznamky"]."</textarea>
				</div>
			</div>
			<div class='crt_emp_btns from_bottom'>
				<button class='sml_btn ud_emp' value=".$row["id"].">
				<img class='sml_img' src='img/confirm.png'>
				</button>
				
				<button class='sml_btn bk_edit_emp'>
				<img class='sml_img' src='img/back.png'>
				</button>
			</div>
		</div>
	<div class='pop_up'>
		<div class='info'>

			<div class='msg_ctn def_csr'>
				<div class='pp_msg'>
				</div>
			</div>
			
			<div class='info_btn'>
				<button class='mini_btn cfm_pp'>
					<img class='mini_img' src='img/confirm.png'>
				</button>
			</div>
		</div>
		<div class='question'>
			
			<div class='msg_ctn def_csr'>
				<div class='pp_msg'>
				</div>
			</div>

			<div class='qtn_btns'>	
				<button class='mini_btn con_pp'>
					<img class='mini_img' src=img/confirm.png>
				</button>
				<button class='mini_btn can_pp'>
					<img class='mini_img' src='img/cancel.png'>
				</button>
			</div>
		</div>
	</div>

      </div>

	<script>
		$(document).on('mousedown','.city',function(){
			var input = $('.city');
			setInterval(function(){
				if (chk_city()==false){
					if (input.val().length > 0){
						set_shadow(input);
					}	
					else{
					remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}
			},100);
		});

		$(document).on('mousedown','.street',function(){
			var input = $('.street');
			setInterval(function(){
				if (chk_street()==false){
					if (input.val().length > 0){
						set_shadow(input);
					}	
					else{
					remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}
			},100);
		});

		$(document).on('mousedown','.stt_num',function(){
			var input = $('.stt_num');
			setInterval(function(){
				if (chk_stt_num()==false){
					if (input.val().length > 0){
						set_shadow(input);
					}	
					else{
					remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}
			},100);
		});

		$(document).on('mousedown','.add_info',function(){
			var input = $('.add_info');
			setInterval(function(){
				if (chk_add_info()==false){
					if (input.val().length > 0){
						set_shadow(input);
					}	
					else{
					remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}
			},100);
		});

		$(document).on('mousedown','.phone_num',function(){
			var input = $('.phone_num');
			setInterval(function(){
				if (chk_phone_num()==false){
					if (input.val().length > 0){
						set_shadow(input);
					}	
					else{
					remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}
			},100);
		});



		$('.card_id').mousedown(function(){
			var input = $('.card_id');
			setInterval(function(){
				if (chk_card_id()==false){
					if (input.val().length > 0){
						set_shadow(input);
					}	
					else{
					remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}
			},100);
		});

		$('.emp_nm').mousedown(function(){
			var input = $('.emp_nm');
			setInterval(function(){
				if (chk_emp_nm()==false){
					if (input.val().length > 0){
						set_shadow(input);
					}	
					else{
					remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}
			},100);
		});

		$('.date_of_bh').mousedown(function(){
			var input = $('.date_of_bh');
			setInterval(function(){
				if (chk_date_of_bh()==false){
					if (input.val().length > 0){
						set_shadow(input);
					}	
					else{
					remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}
			},100);
		});

		$('.salary').mousedown(function(){
			var input = $('.salary');
			setInterval(function(){
				if (chk_salary()==false){	
					if (input.val().length > 0){
						set_shadow(input);
					}	
					else{
					remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}
			},100);
		});
	
		$('.st_date').mousedown(function(){
			var input = $('.st_date');
			setInterval(function(){
				if (chk_st_date()==false){
					if (input.val().length > 0){
						set_shadow(input);
					}	
					else{
					remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}
			},100);
		});

		$('.new_exp').mousedown(function(){
			var input = $('.new_exp');
			setInterval(function(){
				if (chk_new_exp()==false){
					if (input.val().length > 0){
						set_shadow(input);
					}	
					else{
					remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}
			},100);
		});

		$(document).on('mousedown','.exp_chg',function(){
			var input = $('.exp_chg');
			setInterval(function(){
				if (chk_edt_exp()==false){
					if (input.val().length > 0){
						set_shadow(input);
					}	
					else{
					remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}
			},100);
		});
		
		$('.select').on('mousedown',function(){
			var input = $('.sh_exp_lt');
			select_interval=setInterval(function(){
				if (chk_exp()==false){
					set_shadow(input);
				}else{
					remove_shadow(input);
				}
			},100);
		});

		
	</script>";
?>

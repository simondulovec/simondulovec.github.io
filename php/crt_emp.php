<?php
echo "<div class='mn_ctn'>
		<div class='ctd crt_emp'>	
			<div  class='id_expertise'>		
				<input class='big_ipt from_top' id='card_id' type='text' placeholder='Id (10 cifier)'>
				<div class='from_top' id='select'>
					<button id='sh_exp_lt' value=-1>Pozícia</button>
					<button class='dd_btn' id='sh_exp_mn'>+</button>
					<div class='exp_lt'>
						<div class='exp_scr_lt'>
						</div>
					</div>
					<div class='exp_mn'>
						<div class='exp_sli_mn'>
							<input class='big_ipt' id='new_exp' type='text' placeholder='Pozícia (bez diakritiky)'>
							<button class='dd_btn' id='crt_exp'>+</button>
						</div>
					</div>
				</div>
			</div>
			<input class='big_ipt from_top' id='emp_nm' type='text' placeholder='Meno a priezvisko'>	 
			<input class='big_ipt from_top' id='date_of_bh' type='text' placeholder='Dátum narodenia'>
  			<input class='big_ipt from_top' id='salary' type='text' placeholder='EUR/hod'>
			<input class='big_ipt from_top' id='st_date' type='text' placeholder='Dátum nástupu'>	
			
			<div class='crt_emp_btns from_bottom'>
				<button class='sml_btn' id='crt_emp'>
				<img class='sml_img' src='img/add_employee.png'>
				</button>
				
				<button class='sml_btn' id='bk_crt_emp'>
				<img class='sml_img' src='img/back1.png'>
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
				<button id='cfm_pp' class='mini_btn'>
					<img class='mini_img' src='img/confirm1.png'>
				</button>
			</div>
		</div>
		<div class='question'>
			
			<div class='msg_ctn def_csr'>
				<div class='pp_msg'>
				</div>
			</div>

			<div class='qtn_btns'>	
				<button class='mini_btn' id='con_pp'>
					<img class='mini_img' src=img/confirm1.png>
				</button>
				<button class='mini_btn' id='can_pp'>
					<img class='mini_img' src='img/cancel.png'>
				</button>
			</div>
		</div>
	</div>

      </div>

	<script>
		$('#card_id').mousedown(function(){
			var input = $('#card_id');
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

		$('#emp_nm').mousedown(function(){
			var input = $('#emp_nm');
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

		$('#date_of_bh').mousedown(function(){
			var input = $('#date_of_bh');
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

		$('#salary').mousedown(function(){
			var input = $('#salary');
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
	
		$('#st_date').mousedown(function(){
			var input = $('#st_date');
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

		$('#new_exp').mousedown(function(){
			var input = $('#new_exp');
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
		
		set_shadow($('#sh_exp_lt'));
		$('#select').on('mousedown',function(){
			var input = $('#sh_exp_lt');
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

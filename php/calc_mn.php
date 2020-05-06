<?php
echo "<div class='mn_ctn'>
		<div class='res_err'><img class='big_img' src='img/res_err.png'></div>
		<div class='ctd calc_mn'>

			<div class='calc_sch sch_panel from_top'>
				<input class='big_ipt' id='id_calc_data', type='text' placeholder='Id / Id karty'>
				<input class='big_ipt' id='from_calc_data', type='text' placeholder='Od'>
				<input class='big_ipt' id='to_calc_data', type='text' placeholder='Do'>
				<div class='dd_state'>
					<button class='dd_btn' id='dd_state_btn' value=''>*</button>
					<div class='dd_state_mn'>
						<div class='dd_state_lt'>
							<button class='dd_btn' id = 'state_all' value = ''>*</button>
							<button class='dd_btn' id = 'state_payed' value = '1'>Zaplatené</button>
							<button class='dd_btn' id = 'state_not_payed' value = '0'>Nezaplatené</button>
						</div>
					</div>
				</div>

				<button class='dd_btn' id='sch_calc'>
					<img class='nano_img' src='img/search.png'>	
				</button>
			</div>

			
			<div class='result_mn from_top def_csr'>
				<div class='sum'><span>Suma</span></div>
				<div class='result'><span class='euro fade_in'>0 €</span></div>
			</div>

			<div class='calc_btns from_bottom'>	
				<button class='sml_btn' id='bk_calc_mn'>
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
		<div class='loading'>
			<img class='mini_img' src='img/loading.png'>
		</div>
	</div>

	<script>
		$(document).on('mousedown','#id_calc_data',function(){
			var input = $('#id_calc_data');
			setInterval(function(){
				if (chk_calc_id()==false){
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

		$(document).on('mousedown','#from_calc_data',function(){
			var input = $('#from_calc_data');
			setInterval(function(){
				if (chk_calc_from_data()==false){
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
		
		$(document).on('mousedown','#to_calc_data',function(){
			var input = $('#to_calc_data');
			setInterval(function(){
				if (chk_calc_to_data()==false){
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


	</script>";

?>

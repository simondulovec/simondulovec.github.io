<?php
echo "<div class='mn_ctn'>
		<div class='ctd calc_mn'>

			<div class='calc_sch sch_panel from_top'>
				<input class='big_ipt' id='id_calc_data', type='text' placeholder='Id / Id karty'>
				<input class='big_ipt' id='from_calc_data', type='text' placeholder='Od'>
				<input class='big_ipt' id='to_calc_data', type='text' placeholder='Do'>

				<button class='dd_btn' id='sch_calc'>
					<img class='nano_img' src='img/search.png'>	
				</button>
			</div>

			
			<div class='result_mn from_top'>
				<div class='sum'><span>Suma</span></div>
				<div class='result'><span class='fade_in'>0 €</span></div>
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
	</div>";
?>

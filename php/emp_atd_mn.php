<?php
echo "<div class='mn_ctn'>
	<div class='ctd atd_mn'>
		<div class='sch_panel from_top'>
			<input class='big_ipt' id='atd_data' type='text' placeholder='Hľadať'>
			<button class='dd_btn' id='sch_atd'>
				<img class='nano_img' src='img/search.png'>
			</button>	
		</div>
		
		<div class='des_panel def_csr from_top'>
			<div class='atd_name_des des_ele'><span>Meno</span></div>
			<div class='check_in_des des_ele'><span>Príchod</span></div>
			<div class='check_out_des des_ele'><span>Odchod</span></div>
			<div class='time_des des_ele'><span>Celkový čas</span></div>
		</div>
		<div class='atd_scr_lt fade_in'>
		</div>

		<div class='emp_atd_btns from_bottom'>
			<button class='sml_btn' id='bk_atd_mn'>
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
		$(document).on('mousedown','.check_in_ipt',function(){
			var input = $(this);
			setInterval(function(){
				if (chk_timestamp(input)==false){
					if (input.val().length>0){
						set_shadow(input);
					}else{
						remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}
			},100);			
		});

		$(document).on('mousedown','.check_out_ipt',function(){
			var input = $(this);
			setInterval(function(){
			if (chk_timestamp(input)==false){
					if (input.val().length>0){
						set_shadow(input);
					}else{
						remove_shadow(input);
					}
				}else{
					remove_shadow(input);
				}				
			},100);
		});
	</script>";
?>

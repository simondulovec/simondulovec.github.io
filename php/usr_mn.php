<?php 
echo "<div class='mn_ctn'>
		<div class='ctd time_date'>
			<div class='def_csr from_top' id='date'>-</div>
			<div class='def_csr from_top' id='time'>00:00:00</div>
			<div class='def_csr from_top' id='usr_nm'>Priložte kartu
			</div>
			<div class='usr_mn_btns from_bottom'>
				<button class='sml_btn' id='check_in'>
					<img class='sml_img' src='img/check_in.png'>
				</button>
				<button class='sml_btn' id='check_out'>
					<img class='sml_img' src='img/check_out.png'>
				</button>
				<button class='sml_btn' id='bk_usr_mn'>
					<img class='sml_img' src='img/back1.png'>
				</button>
			</div>
			<input id='usr_id' type='text'>
		</div>

		<div class='pop_up'>
		<div class='info'>

			<div class='msg_ctn def_csr'>
				<div class='pp_msg'>
				</div>
			</div>
			
			<div class='info_btn'>
				<button class='mini_btn cfm_pp'>
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
				<button class='mini_btn con_pp'>
					<img class='mini_img' src=img/confirm1.png>
				</button>
				<button class='mini_btn can_pp'>
					<img class='mini_img' src='img/cancel.png'>
				</button>
			</div>
		</div>
	</div>

      </div>
      <script>		
		setInterval(function(){
			$('#usr_id').focus();
			if($('#usr_id').val().length==10){
				ld_emp_nm();
				emp_card_id=$('#usr_id').val();
				$('#usr_id').val('');
				$('#usr_id').text('');
			}
		},100);
		setInterval(function(){
			$('#date').text(get_curr_date());
			$('#time').text(get_curr_time());
		},1000);
	</script>";
?>

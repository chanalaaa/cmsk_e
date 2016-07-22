<?php include('meta.php'); ?>
	<div id="regisModal_done" class="modal">
		    <!-- Modal content -->
		    <div class="modal-content">
		        <div class="modal-body">
		            <p class="modal-text_title">ทำรายการเรียบร้อยแล้ว</p>     
		             <a class="btn btn_green_long" id="btnRegisModal_done" href="#"><span>เสร็จสิ้น</span></a> 
		              <a class="btn btn_white_long" href="payment.php"><span>ชำระเงิน</span></a> 
		        </div>
		    </div>
		</div>

<?php 
$page = " ";
include('header.php'); 
?>


<!-- cmsk_main_content -->
<div class="cmsk_main_content">

	<!-- headpage_banner -->
	<div class="headpage_banner">

		<!-- wrapper -->
		<div class="wrapper">
			<p class="page_topic text_white">สมัครสมาชิก</p>
		</div>
		<!-- end wrapper -->

	</div>
	<!-- end headpage_banner -->


	<!-- course_wrapper -->
	<div class="course_wrapper bg_white">

		<!-- wrapper -->
		<div class="wrapper">

			<!-- cmsk_register_wrapper -->
			<div class="cmsk_register_wrapper">
				<form class="cmsk_register_form">
					<input name="name" placeholder="ชื่อ">
					<input name="lastname" placeholder="นามสกุล">
					<input name="email" placeholder="อีเมล์">
					<input name="password" placeholder="รหัสผ่าน">
					<input name="comfirm_password" placeholder="ยืนยันรหัสผ่าน">
					<div class="cmsk_register_button">
						<a class="btn btn_green_long" id="btnRegis_done" href="#"><span>ดำเนินการต่อ</span></a>
					</div>
				</form>
			</div>
			<!-- end cmsk_register_wrapper -->

		</div>
		<!-- end wrapper -->

	</div>
	<!-- end course_wrapper -->

	
	







</div>
<!-- end cmsk_main_content -->



<?php include('footer.php'); ?>

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
    <!-- course_wrapper -->
    <div class="course_wrapper bg_white">
        <!-- wrapper -->
        <div class="wrapper">
            <!-- cmsk_thx_wrapper -->
            <div class="cmsk_thx_wrapper">
                <div class="logo_img">
                    <img src="http://placehold.it/300x120" alt=""></div>
                <p><span class="text_storng">ขอบคุณที่ทำรายการสั่งซื้อคอร์ส FASTLANE Single License</span></p>
                <p><span class="text_storng">Order ID:</span> FLS000001</p>
                <p>ท่านทำรายการเมื่อ วันพฤหัสบดีที่ 21 กรกฏคม 2559</p>
                <div class="warp_detail">
                	<p>ท่านมีเวลาชำระเงินภายใน 7 วัน นับจากวันลงทะเบียนสั่งซื้อ<br>เมื่อสถานะการชำระเงินถูกอัพเดท ท่านจะได้รับการยืนยันผ่านทางอีเมล์ทันที</p>
                </div>
                <a href="index.php" class="take_me_home">กลับสู่หน้าหลัก</a>
            </div>
            <!-- end cmsk_thx_wrapper -->
        </div>
        <!-- end wrapper -->
    </div>
    <!-- end course_wrapper -->
</div>
<!-- end cmsk_main_content -->
<?php include('footer.php'); ?>

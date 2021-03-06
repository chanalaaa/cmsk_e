<?php 
$title = "Payment | CMSK E-Learning";
include('meta.php'); ?>
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
            <p class="page_topic text_white">ชำระเงิน</p>
        </div>
        <!-- end wrapper -->
    </div>
    <!-- end headpage_banner -->
    <!-- course_wrapper -->
    <div class="course_wrapper bg_white">
        <!-- wrapper -->
        <div class="wrapper">
            <!-- course_wrapper_in -->
            <div class="course_wrapper_in payment_page info">
                <!-- course_left -->
                <div class="course_left">
                    <ul>
                        <li>ชื่อผู้สมัคร :</li>
                        <li>ชื่อคอร์ส :</li>
                        <li>Order ID :</li>
                        <li>วันหมดอายุ :</li>
                        <li class="text_blue">ราคา :</li>
                    </ul>
                </div>
                <!-- end course_left -->
                <!-- course_right -->
                <div class="course_right">
                    <ul>
                        <li>คุณ JOHN DOE</li>
                        <li>FASTLANE Single License</li>
                        <li>FLS000001</li>
                        <li>11 ต.ค. 2559</li>
                        <li class="text_blue">1,990 บาท</li>
                    </ul>
                </div>
                <!-- end course_right -->
            </div>
            <!-- end course_wrapper_in -->
        </div>
        <!-- end wrapper -->
    </div>
    <!-- end course_wrapper -->
    <!-- course_wrapper -->
    <div class="course_wrapper payment_wrapper bg_white">
        <br>
        <div class="line_green"></div>
        <!-- wrapper -->
        <div class="wrapper">
            <!-- course_wrapper_in -->
            <div class="course_wrapper_in payment_page">
                <!-- course_left -->
                <div class="course_left">
                    <h1 class="course_head_payment text_blue">จ่ายโดยการโอนเงิน</h1>
                    <div class="icon_image">
                        <img src="img/icon_bank.png">
                    </div>
                </div>
                <!-- end course_left -->
                <!-- course_right -->
                <div class="course_right">
                    <div class="course_intro_wrap">
                        <p>วิธีการสมัครคอร๋ส FASTLANE Single License</p>
                    </div>
                    <div class="module_section payment_process">
                        <ul class="module">
                           <!--  <li>กรอกข้อมูลลงในใบสมัคร (download)</li> -->
                            <li>โอนเงินเข้าบัญชี : บริษัท ซีเอ็มเอสเค จำกัดธนาคารไทยพาณิชย์ สาขาถนนตากสิน ประเภทบัญชีออมทรัพย์ เลขที่บัญชี 055-2-50698-4</li>
                            <li>ส่งหลักฐานการโอนเงิน และสำเนาบัตรประชาชนมาที่ E-mail: <a href="mailto:training@cmsk.co.th">training@cmsk.co.th</a> เพื่อยืนยันการลงทะเบียน</li>
                        </ul>
                    </div>
                    <div class="cmsk_payment_text ps">
                        <p>* หลังจากบริษัทได้รับ E-mail หลักฐานการลงทะเบียนเเล้ว จะติดต่อกลับไปเพื่อยืนยันอีกทีค่ะ</p>
                    </div>
                    <div class="course_intro_wrap">
                        <div class="creditcard_payment">
                            <a class="btn btn_green_long" href="thankyou_pay.php"><span>ยืนยัน</span></a>
                        </div>
                    </div>
                    <!-- <div class="button_wrap">
						<a class="btn btn_green_long" href="trial_register.php"><span>ทดลองใช้</span></a>
						<a class="btn btn_green_182 btn_next" href="course_practice.php"><span>ตัวอย่างแบบฝึกหัด</span></a>
					</div> -->
                </div>
                <!-- end course_right -->
            </div>
            <!-- end course_wrapper_in -->
        </div>
        <!-- end wrapper -->
    </div>
    <!-- end course_wrapper -->
    <!-- course_wrapper -->
    <div class="course_wrapper payment_wrapper bg_white">
        <br>
        <div class="line_gray"></div>
        <!-- wrapper -->
        <div class="wrapper">
            <!-- course_wrapper_in -->
            <div class="course_wrapper_in credit_section">
                <!-- course_left -->
                <div class="course_left">
                    <h1 class="course_head_payment text_blue">จ่ายผ่านบัตรเครดิต</h1>
                    <div class="icon_image">
                        <img src="img/icon_creditcard.png">
                    </div>
                </div>
                <!-- end course_left -->
                <!-- course_right -->
                <div class="course_right">
                    <div class="course_intro_wrap">
                        <div class="creditcard_payment">
                            <div class="course_intro_wrap">
                                <p>ทำรายการชำระเงินผ่านบัตรเครดิต</p>
                            </div>
                            <br>
                            <a class="btn btn_green_long" href="thankyou_card.php"><span>ดำเนินการต่อ</span></a>
                        </div>
                    </div>
                </div>
                <!-- end course_right -->
            </div>
            <!-- end course_wrapper_in -->
        </div>
        <!-- end wrapper -->
    </div>
    <!-- end course_wrapper -->
</div>
<!-- end cmsk_main_content -->
<?php include('footer.php'); ?>

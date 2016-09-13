<?php include('social.php'); ?>
<!-- footer_contact_section -->
<div class="footer_contact_section bg_blue">
    <!-- wrapper -->
    <div class="wrapper">
        <!-- footer_contact_wrap -->
        <div class="footer_contact_wrap">
            <!-- address_wrap -->
            <div class="address_wrap">
                <address>
                    <h1 class=""><img class="cmsk_white_logo" src="img/cmsk_white_logo.png" alt=""></h1>
                    <p>126/103 ชั้น 26 อาคารไทยศรี ถนนกรุงธนบุรี แขวงบางลำภูล่าง <br>เขตคลองสาน กรุงเทพ 10600 (สถานีรถไฟฟ้ากรุงธนบุรีทางออกที่ 2)</p>
                </address>
            </div>
            <!-- end address_wrap -->
            <!-- contact_info_wrap -->
            <div class="contact_info_wrap">
                <ul class="contact_info">
                         <li>
                        <div class="contact_icon">
                            <a href="https://www.facebook.com/cmsktraining/" class="icon_fb"></a>
                        </div>
                        <p><a href="https://www.facebook.com/cmsktraining/">Facebook</a></p>
                    </li>
                    <li>
                        <div class="contact_icon">
                            <a class="icon_line"></a>
                        </div>
                        <p><a href="#">Line@ SingleLicense</a></p>
                    </li>
                </ul>
                 <ul class="contact_info">

                    <li>
                        <div class="contact_icon">
                            <a href="092-270-2115" class="icon_phone"></a>
                        </div>
                        <p><a href="092-270-2115">โทร: 092-270-2115</a></p>
                    </li>
                    <li>
                        <div class="contact_icon">
                            <a href="mailto:training@cmsk.co.th" class="icon_letter"></a>
                        </div>
                        <p>Email: <a href="mailto:training@cmsk.co.th">training@cmsk.co.th</a></p>
                    </li>
                    <li>
                        <div class="contact_icon">
                            <a href="https://www.google.co.th/maps/place/CMSK/@13.720361,100.4995193,17z/data=!3m1!4b1!4m5!3m4!1s0x30e298e9142f40a5:0x27214a495f5455f!8m2!3d13.720361!4d100.501708?hl=en" class="icon_pin"></a>
                        </div>
                        <p><a href="https://www.google.co.th/maps/place/CMSK/@13.720361,100.4995193,17z/data=!3m1!4b1!4m5!3m4!1s0x30e298e9142f40a5:0x27214a495f5455f!8m2!3d13.720361!4d100.501708?hl=en">ดูแผนที่</a></p>
                    </li>
                </ul>
            </div>
            <!-- end contact_info_wrap -->
        </div>
        <!-- end footer_contact_wrap -->
    </div>
    <!-- end wrapper -->
</div>
<!-- end footer_contact_section -->
<!-- footer -->
<footer>
    <!-- wrapper -->
    <div class="wrapper">
        <!-- footer_wrap -->
        <div class="footer_wrap">
            <div class="right_part">
                <img src="img/footer_image.png" />
            </div>
            <div class="copyright">
                <p class="text_arial">Copyright ©
                    <?php echo date('Y'); ?> <span class="">CMSK Co., Ltd.</span> All Rights Reserved.<br> Powered by CMSK Academy.</p>
            </div>
        </div>
        <!-- end footer_wrap -->
    </div>
    <!-- end wrapper -->
    <br>
    <br>
</footer>
<!-- end footer -->
<script>
/*$(document).ready(function(){
	  $(".showquestion").click(function(){

	  	var toggle_id = $(this).attr('data-toggle');

	   	$(".question_display").not("#toggle"+toggle_id).slideUp("fast");
	   	$(".question_display").not("#toggle"+toggle_id).hide();
	   	$("#toggle"+toggle_id).slideToggle("fast");
	  });
	});*/

/*var click = 1;
	$(".showquestion").click(function(){

	var toggle_id = $(this).attr('data-toggle');

	if(click == 0){
		$(".question_display").not("#toggle"+toggle_id).slideUp("fast");
	   	$(".question_display").not("#toggle"+toggle_id).hide();
	   	$("#toggle"+toggle_id).slideToggle("fast");
			$(".showquestion").removeClass("active");
		click = 1;

	}else{

	   	$(".question_display").not("#toggle"+toggle_id).slideUp("fast");
	   	$(".question_display").not("#toggle"+toggle_id).hide();
	   	$("#toggle"+toggle_id).slideToggle("fast");
	   	$(this).addClass("active");
		click = 0;
	}

});*/


/*var click = 1;

		$(".showquestion").click(function(){

		var toggle_id = $(this).attr('data-toggle');
		var btn_id = $(this).attr('data-btn');

		if(click == 0){
			$(".question_display").not("#toggle"+toggle_id).slideUp("fast");
		   	$(".question_display").not("#toggle"+toggle_id).hide();
		   	$("#toggle"+toggle_id).slideToggle("fast");
				
				$(".showquestion").removeClass("active");

				$(".showquestion").not("#btn_q"+btn_id).removeClass("active");

				$("#btn_q"+btn_id).addClass("active");


			click = 1;

		}else{

		   	$(".question_display").not("#toggle"+toggle_id).slideUp("fast");
		   	$(".question_display").not("#toggle"+toggle_id).hide();
		   	$("#toggle"+toggle_id).slideToggle("fast");
		   	$(".showquestion").removeClass("active");
		   	$("#btn_q"+btn_id).addClass("active");

			click = 0;
		}


	});*/



var click = 1;
var btn_q_active = false;
var btn_click_count = 0;

$(".showquestion").click(function() {

    var toggle_id = $(this).attr('data-toggle');
    //var btn_id = $(this).attr('data-btn');

    if (click == 0) {
        $(".question_display").not("#toggle" + toggle_id).slideUp("fast");
        $(".question_display").not("#toggle" + toggle_id).hide();
        $("#toggle" + toggle_id).slideToggle("fast");

        /*$(".showquestion").removeClass("active");

        $(".showquestion").not("#btn_q"+btn_id).removeClass("active");

        $("#btn_q"+btn_id).addClass("active");*/


        click = 1;

    } else {

        $(".question_display").not("#toggle" + toggle_id).slideUp("fast");
        $(".question_display").not("#toggle" + toggle_id).hide();
        $("#toggle" + toggle_id).slideToggle("fast");
        /*$(".showquestion").removeClass("active");
        $("#btn_q"+btn_id).addClass("active");*/

        click = 0;
    }


});





$(".showquestion").click(function() {
    var btn_id = $(this).attr('data-btn');

    if (btn_q_active == true) {
        $(".showquestion").removeClass("active");
        $("#btn_q" + btn_id).addClass("active");
        btn_q_active = false;
        /*if (btn_click_count == 1) {
        	$(".showquestion").removeClass("active");
        	btn_click_count = 0;
        }
        else{
        	$("#btn_q"+btn_id).addClass("active");
        }*/
        if ($(".showquestion").hasClass("active")) {
            $(this).removeClass("active");
        };
    } else {
        $(".showquestion").removeClass("active");
        $("#btn_q" + btn_id).addClass("active");
        btn_q_active = true;

        /*btn_click_count = btn_click_count+1;*/
    }

    /*$("#btn_q"+btn_id).addClass("active");
    btn_click_count = btn_click_count+1;*/

});
</script>
</body>

</html>

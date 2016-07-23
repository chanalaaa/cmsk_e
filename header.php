<!-- header -->
<header>
	<!-- wrapper -->
	<!-- <div class="wrapper"> -->
		
		<!-- header_in -->
		<div class="header_in">

		<div class="logo"><a href="index.php"><img src="img/cmsk_logo.png"></a></div>
		<nav>
		<a class="btn btn_green btn_regismobile" href="register.php"><span>บทความ</span></a>
			<div class="btn_m_menu" id="mobile_menu">
			<ul>
				
				<li><p><a <?php if($page == "course") echo('class="active"'); ?> href="course.php">คอร์ส</a></p></li>
				<li><p><a <?php if($page == "trainer") echo('class="active"'); ?> href="trainer.php">วิทยากร</a></p></li>
				<li><p><a <?php if($page == "impressions") echo('class="active"'); ?> href="impressions.php">ความประทับใจ</a></p></li>
				<li><p><a <?php if($page == "blog") echo('class="active"'); ?> href="index.php">บทความ</a></p></li>
				<!--<li><p><a href="#">ติดต่อ</a></p></li>-->
				<li class="menuBtn_login"><p><a id="login_btn" href="#">ล็อคอิน</a></p></li>
				<li class="btn_regis"><a class="btn btn_green" href="register.php"><span>สมัครเรียน</span></a></li>
			</ul>
			</div>
		</nav>

		</div>
		<!-- end header_in -->


		<!-- Mobile menu -->
		<div class="mobile_menu_wrapper visible_mobile">
		
			<ul>
				<!--<li><p><a href="#">หน้าหลัก</a></p></li>-->
				
				<li><p><a <?php if($page == "course") echo('class="active"'); ?> href="course.php">คอร์ส</a></p></li>
				<li><p><a <?php if($page == "trainer") echo('class="active"'); ?> href="index.php">วิทยากร</a></p></li>
				<li><p><a <?php if($page == "impressions") echo('class="active"'); ?> href="index.php">ผลงานที่ผ่านมา</a></p></li>
				<li><p><a <?php if($page == "blog") echo('class="active"'); ?> href="index.php">บทความ</a></p></li>
				<!--<li><p><a href="#">ติดต่อ</a></p></li>-->
				<li><p><a id="login_btn" href="#">ล็อคอิน</a></p></li>
				
			</ul>
		</div>
	
		<script>
			var click = 1;
				$("#mobile_menu").click(function(){

					if(click == 0){
					    $(".mobile_menu_wrapper").removeClass("active");
					    $("#menu_button").removeClass("active");
					    click = 1;
					}else{
					    $(".mobile_menu_wrapper").addClass("active");
					    $("#menu_button").addClass("active");
					click = 0;
					}

				});

		</script>

	<!-- </div> -->
	<!-- end wrapper -->
</header>
<!-- end header -->

	<div id="loginModal" class="modal">
		    <!-- Modal content -->
		    <span id="modal-close">×</span>
		    <div class="modal-content">
		        <div class="modal-body">
		            <p class="modal-text_title">เข้าสู่ระบบ</p>
		            <input name="id" placeholder="ชื่อผู้ใช้">
		            <input name="password"  type="password" placeholder="รหัสผ่าน">
		            <a class="btn btn_green_long" href="#"><span>ล็อกอิน</span></a> <span>ท่านยังไม่ได้เป็นสมาชิก <a href="register.php" style="text-decoration:underline;" > สมัครสมาชิก</a></span>
		            <br>
		            <div class="line_white"></div>
		              <br>
		              <p class="modal-text_title">ลืมรหัสผ่าน</p>
		           	 <input name="email" type="email" placeholder="อีเมล์">
		             <a class="btn btn_green_long" href="#"><span>ส่ง</span></a> 
		        </div>
		    </div>
		</div>

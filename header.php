<!-- header -->
<header>
	<!-- wrapper -->
	<!-- <div class="wrapper"> -->
		
		<!-- header_in -->
		<div class="header_in">

		<div class="logo"><a href="index.php"><img src="img/cmsk_logo.png"></a></div>
		<nav>
			<div class="btn_m_menu" id="mobile_menu">
			<ul>
				<li><p><a <?php if($page == "home") echo('class="active"'); ?> href="index.php">หน้าหลัก</a></p></li>
				<li><p><a <?php if($page == "course") echo('class="active"'); ?> href="course.php">คอร์ส</a></p></li>
				<!--<li><p><a href="#">ติดต่อ</a></p></li>-->
				<li><p><a href="#">ล็อคอิน</a></p></li>
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
				<li><p><a <?php if($page == "home") echo('class="active"'); ?> href="index.php">หน้าหลัก</a></p></li>
				<li><p><a <?php if($page == "course") echo('class="active"'); ?> href="course.php">คอร์ส</a></p></li>
				<!--<li><p><a href="#">ติดต่อ</a></p></li>-->
				<li><p><a href="#">ล็อคอิน</a></p></li>
				<li><a class="btn btn_green" href="register.php"><span>สมัครเรียน</span></a></li>
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
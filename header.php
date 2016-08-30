<!-- header -->
<header>
    <!-- wrapper -->
    <!-- <div class="wrapper"> -->
    <!-- header_in -->
    <div class="header_in">
        <div class="logo">
            <a href="index.php"><img src="img/cmsk_logo.png"></a>
        </div>
        <nav>
            <a class="btn btn_green btn_regismobile main btn_regis" href="register.php"><span>สมัครเรียน</span></a>
            <div class="btn_m_menu" id="mobile_menu">
                <ul>
                 <li>
                        <p><a <?php if($page=="home" ) echo( 'class="active"'); ?> href="index.php">หน้าแรก</a></p>
                    </li>
                    <li>
                        <p><a <?php if($page=="course" ) echo( 'class="active"'); ?> href="course.php">คอร์ส</a></p>
                    </li>
                    <li>
                        <p><a <?php if($page=="trainer" ) echo( 'class="active"'); ?> href="trainer.php">วิทยากร</a></p>
                    </li>
                    <li>
                        <p><a <?php if($page=="impressions" ) echo( 'class="active"'); ?> href="impressions.php">ความประทับใจ</a></p>
                    </li>
                    <li>
                        <p><a <?php if($page=="blog" ) echo( 'class="active"'); ?> href="blog.php">บทความ</a></p>
                    </li>
                    <!--<li><p><a href="#">ติดต่อ</a></p></li>-->
                    <li class="menuBtn_login">
                        <p>
                            <a id="login_btn" class="text_blue" href="#">
                                <?php if($page == "dashboard") {echo('Logout');}else{
                    echo('Login');
                    } ?> </a>
                        </p>
                    </li>
                    <li class="btn_regis main"><a class="btn btn_green btn_regis" href="register.php"><span>สมัครเรียน</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header_in -->
    <!-- Mobile menu -->
    <div class="mobile_menu_wrapper">
        <div id="modal-close3"><img src="img/ico_close.png" alt="" class="icon_circle"></div>
        <ul>
            <!--<li><p><a href="#">หน้าหลัก</a></p></li>-->
            <li>
                <p><a <?php if($page=="home" ) echo( 'class="active"'); ?> href="index.php">หน้าแรก</a></p>
            </li>
            <li>
                <p><a <?php if($page=="course" ) echo( 'class="active"'); ?> href="course.php">รายละเอียดคอร์ส</a></p>
            </li>
            <li>
                <p><a <?php if($page=="trainer" ) echo( 'class="active"'); ?> href="trainer.php">วิทยากร</a></p>
            </li>
            <li>
                <p><a <?php if($page=="impressions" ) echo( 'class="active"'); ?> href="impressions.php">ความประทับใจ</a></p>
            </li>
            <li>
                <p><a <?php if($page=="blog" ) echo( 'class="active"'); ?> href="blog.php">บทความ</a></p>
            </li>
            <!--<li><p><a href="#">ติดต่อ</a></p></li>-->
            <li>
                <p><a id="login_btn1" class="text_blue" href="#">Login</a></p>
            </li>
        </ul>
    </div>
    <script>
    $("#mobile_menu").click(function() {
        $(".mobile_menu_wrapper").addClass("active");
        $("#menu_button").addClass("active");
    });
    $("#modal-close3").click(function() {
        $(".mobile_menu_wrapper").removeClass("active");
        $("#menu_button").removeClass("active");
    });
    </script>
    <!-- </div> -->
    <!-- end wrapper -->
</header>
<!-- end header -->
<div id="loginModal" class="modal">
    <!-- Modal content -->
    <span id="modal-close"><img src="img/ico_close.png" alt="" class="icon_circle"></span>
    <div class="modal-content">
        <div class="modal-body">
            <p class="modal-text_title">เข้าสู่ระบบ</p>
            <input name="id" placeholder="ชื่อผู้ใช้">
            <input name="password" type="password" placeholder="รหัสผ่าน">
            <a class="btn btn_green_long" href="dashboard.php"><span>Login</span></a> <span>ท่านยังไม่ได้เป็นสมาชิก <a href="register.php" class="regis_text" style="text-decoration:underline;" > สมัครสมาชิก</a></span>
            <br>
            <div class="line_white"></div>
            <br>
            <p class="modal-text_title">ลืมรหัสผ่าน</p>
            <input name="email" type="email" placeholder="อีเมล์">
            <a class="btn btn_green_long" href="#"><span>ส่ง</span></a>
        </div>
    </div>
</div>

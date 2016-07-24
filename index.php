<?php include('meta.php'); ?>
<?php 
$page = "home";
include('header.php'); 
?>
<script src="js/jquery.bxslider.js?v=<?php echo date(" Y-m-d-H-i-s "); ?>"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css?v=<?php echo date(" Y-m-d-H-i-s "); ?>" />
<!-- cmsk_main_content -->
<div class="cmsk_main_content">
    <!-- banner -->
    <div class="banner">
        <!-- wrapper -->
        <div class="wrapper index">
            <!-- banner_in -->
            <div class="banner_in">
                <div class="cmsk_slide">
                    <ul class="bxslider">
                        <li>
                            <img src="http://placehold.it/1200x450" />
                            <div id="seemore">
                                <a class="btn btn_seemore_white" href="#">
                                    <span class="">FAST LANE Single License</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <img src="http://placehold.it/1200x450" />
                            <div id="seemore">
                                <a class="btn btn_seemore_white" href="#">
                                    <span class="">Test</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <img src="http://placehold.it/1200x450" />
                            <div id="seemore">
                                <a class="btn btn_seemore_white" href="#">
                                    <span class="">Single License ALL-IN-ONE</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <img src="http://placehold.it/1200x450" />
                            <div id="seemore">
                                <a class="btn btn_seemore_white" href="#">
                                    <span class="">Test</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <script type="text/javascript">
                    $(document).ready(function() {
                        $('.bxslider').bxSlider({
                            auto: true,
                            pause: 6000,
                            controls: true,
                        });
                    });
                    </script>
                </div>
                <!-- <div id="seemore">
					<a class="btn btn_seemore_white" href="#">
						<span class="">Single License ALL-IN-ONE</span>
					</a>
				</div> -->
            </div>
            <!-- end banner_in -->
        </div>
        <!-- end wrapper -->
    </div>
    <!-- end banner -->
    <!-- cmsk_row -->
    <div class="cmsk_row bg_white">
        <!-- cmsk_row1_text -->
        <div class="cmsk_row1_text text_thaisans_neue">
            <p class="text_green highlight">WHAT YOU GET</p>
            <p>สิ่งที่คุณจะได้รับ</p>
        </div>
        <!-- end cmsk_row1_text -->
        <div class="circle_mobile visible_mobile"><img src="img/circle_mobile.png"></div>
    </div>
    <!-- end cmsk_row -->
    <!-- cmsk_row2col -->
    <div class="cmsk_row2col">
        <!-- cmsk_row2col_wrap -->
        <div class="cmsk_row2col_wrap">
            <!-- cmsk_row2col_left -->
            <div class="cmsk_row2col_left bg_green1">
                <div class="left_article">
                    <p class="text_headline text_green">INTENSIVE <br><span>เนื้อหาเข้มข้น ตรงประเด็น</span></p>
                    <ul class="bullet">
                        <li><p class="bullet_title">ตรงประเด็น</p>ได้ความรู้แบบเน้นๆ ตรงประเด็นเข้าใจเนื้อหาสำคัญสำหรับสอบ ได้ภายใน15 ชม.</li>
                        <li><p class="bullet_title">มีเทคนิค</p>เทคนิคการสอนที่เข้าใจง่ายและ มีเทคนิคเพิ่มในการช่วยจำ</li>
                        <li><p class="bullet_title">ตะลุยโจทย์พร้อมเนื้อหาสำคัญ</p>ตะลุยโจทย์ไปพร้อมเนื้อหาสำคัญ เพิ่มความเข้าใจได้มากขึ้น</li>
                        <li><p class="bullet_title">โจทย์มากมายให้ฝึกฝน</p>โจทย์มากมายหลากหลายให้ได้ฝึกฝน หลังเรียนจบก่อนเจอข้อสอบจริง</li>
                    </ul>
                </div>
            </div>
            <!-- end cmsk_row2col_left -->
            <!-- cmsk_row2col_right -->
            <div class="cmsk_row2col_right bg_green2">
                <div class="right_article">
                    <p class="text_headline text_green">ASSURE<br><span>เพิ่มความมั่นใจ ว่าคุณก็สอบผ่านได้เช่นกัน</span></p>
                    <ul class="bullet">
                        <li><p class="bullet_title">ถอดสูตรความสำเร็จจากคอร์สหลัก</p>ถอดสูตรความสำเร็จจากคอร์สหลัก ที่ผู้เรียนสอบผ่านกว่าหลายพันคน</li>
                        <li><p class="bullet_title">ประสบการณ์อันยาวนาน</p>ด้วยประสบการณ์อันยาวนานของผู้สอน จึงเข้าใจว่าผู้เรียนต้องการอะไร </li>
                        <li><p class="bullet_title">ถ่ายทอดเนื้อหาได้ดี</p>ถ่ายทอดเนื้อหาออกมาให้เข้าใจได้ง่าย ไม่จำเป็นต้องมีพื้นฐานก็เรียนเข้าใจได้</li>
                        <li><p class="bullet_title">ใส่ใจติดตามการสอน</p>ใส่ใจติดตามการสอน พร้อมตอบทุกข้อสงสัยผ่านแอพพลิเคชั่น Line@ โดย TA ผู้เชี่ยวชาญ</li>
                    </ul>
                </div>
            </div>
            <!-- end cmsk_row2col_right -->
        </div>
        <!-- end cmsk_row2col_wrap -->
        <!--<div class="circle hidden_mobile"><img src="img/circle_desktop.png"></div>-->
        <div class="circle hidden_mobile"><img src="img/circle_mobile.png"></div>
    </div>
    <!-- end cmsk_row2col -->
    <!-- cmsk_row3col -->
    <div class="cmsk_row3col bg_green3">
        <!-- wrapper -->
        <div class="wrapper">
            <p class="text_headline text_green">FLEXIBLE <br><span>คล่องตัวสำหรับทุกไลฟ์สไตล์</span>  </p>

            <!-- cmsk_row3col_wrap -->
            <div class="cmsk_row3col_wrap">
                <!-- cmsk_row3col_box -->
                <div class="cmsk_row3col_box">
                    <ul class="bullet">
                        <li><p class="bullet_title">สะดวกมากขึ้น</p>เลือกเรียนได้ตามใจ เรียนได้สะดวกทุกที่ทุกเวลา </li>
                    </ul>
                </div>
                <!-- end cmsk_row3col_box -->
                <!-- cmsk_row3col_box -->
                <div class="cmsk_row3col_box">
                    <ul class="bullet">
                        <li><p class="bullet_title">มีวลาพักทำความเข้าใจ</p>หยุดเพื่อทำความเข้าใจเนื้อหาเพิ่มเติม ได้ตามต้องการ (ก่อนไปต่อที่ส่วนอื่น)</li>
                    </ul>
                </div>
                <!-- end cmsk_row3col_box -->
                <!-- cmsk_row3col_box -->
                <div class="cmsk_row3col_box">
                    <ul class="bullet">
                        <li><p class="bullet_title">ทบทวนซ้ำได้</p>ทบทวนเนื้อหาที่เรียนซ้ำได้ ตามความพอใจ</li>
                    </ul>
                </div>
                <!-- end cmsk_row3col_box -->
            </div>
            <!-- end cmsk_row3col_wrap -->
        </div>
        <!-- end wrapper -->
    </div>
    <!-- end cmsk_row3col -->
    <!-- cmsk_row1_4col -->
    <div class="cmsk_row1_4col bg_white">
        <!-- wrapper -->
        <div class="wrapper">
            <!-- cmsk_row1_4col_wrap -->
            <div class="cmsk_row1_4col_wrap">
                <!-- cmsk_row1_4col_left -->
                <div class="cmsk_row1_4col_left">
                    <p class="text_subhead text_black">คอร์ส</p>
                </div>
                <!-- end cmsk_row1_4col_left -->
                <!-- cmsk_row1_4col_right -->
                <div class="cmsk_row1_4col_right">
                    <!-- text_description -->
                    <div class="text_description">
                        <p class="course_head text_green">FAST LANE Single License</p>
                        <p>หลักสูตรครอบคลุมเนื้อหาทั้งหมดสำหรับการเตรียมสอบใบอนุญาตผู้แนะนำการลงทุนด้านหลักทรัพย์ (Securities Investment Consultant, SIC) หรือที่เรียกกันอย่างไม่เป็นทางการว่า Single License ซึ่งเป็นใบอนุญาตสำหรับผู้ประกอบวิชาชีพเกี่ยวกับการซื้อขายหลักทรัพย์ เช่น หุ้น ตราสารหนี้ กองทุนรวม</p>
                        <br>
                        <p>ด้วยเนื้อหาเข้มข้นและประสบการณ์ที่สั่งสมมาอย่างยาวนานของผู้สอน ให้คุณมั่นใจได้ว่าการสอบผ่าน Single License ไม่ใช่เรื่องยาก และยังสามารถเรียนได้อย่างสะดวก ทุกที่ทุกเวลา</p>
                    </div>
                    <!-- end text_description -->
                    <!-- button_wrap -->
                    <div class="button_wrap">
                       <!-- <a class="btn btn_black" href="#"><span>ดูต่อทั้งหมด</span></a> -->
                        <a class="btn btn_green_long" href="#"><span>อ่านรายละเอียด</span></a>
                        <span class="btn_regis main btn_next"><a class="btn btn_green" href="register.php"><span>สมัครเรียน</span></a></span>
                    </div>
                    <!-- end button_wrap -->
                </div>
                <!-- end cmsk_row1_4col_right -->
            </div>
            <!-- end cmsk_row1_4col_wrap -->
        </div>
        <!-- end wrapper -->
    </div>
    <!-- end cmsk_row1_4col -->
    <!-- cmsk_row1_4col -->
    <div class="cmsk_row1_4col bg_gray text_white faq_wrap">
        <!-- wrapper -->
        <div class="wrapper">
            <!-- cmsk_row1_4col_wrap -->
            <div class="cmsk_row1_4col_wrap">
                <!-- cmsk_row1_4col_left -->
                <div class="cmsk_row1_4col_left">
                    <p class="text_subhead">FAQ</p>
                </div>
                <!-- end cmsk_row1_4col_left -->
                <!-- cmsk_row1_4col_right -->
                <div class="cmsk_row1_4col_right">
                    <!-- text_slide -->
                    <div class="text_slide">
                        <ul class="faq">
                            <li class="question">
                                <p class="faq_head">ทำไมถึงควรเรียนเป็นแบบ E-Learning</p>
                            </li>
                            <li class="answer">
                                <p>เพราะเป็นระบบที่มีประสิทธิภาพที่สุดในปัจจุบันปราศจากข้อจำกัดต่างๆ</p>
                            </li>
                            <li class="question">
                                <p class="faq_head">ระบบการเรียนเป็นอย่างไร?</p>
                            </li>
                            <li class="answer">
                                <p>ผู้เรียนจะสามารถดู Video ผ่านระบบ Online ซึ่งจะมี Power Point Presentation ประกอบกับคำบรรยายของวิทยากร จะมี Quiz ให้ฝึกทำสำหรับทุกตอน พร้อมเฉลยโดยละเอียด</p>
                            </li>
                            <li class="question">
                                <p class="faq_head">สามารถดู Video ได้เมื่อไหร่ และเป็นเวลานานแค่ไหน</p>
                            </li>
                            <li class="answer">
                                <p>ดูได้ตลอดเวลา เลือกดูตอนใดก็ได้ ย้อนกลับไปดูได้ เป็นเวลา 6 เดือน นับตั้งแต่วันที่ชำระค่าเรียน</p>
                            </li>
                            <li class="question">
                                <p class="faq_head">ถ้ามีคำถามระหว่างการเรียนจะทำอย่างไร</p>
                            </li>
                            <li class="answer">
                                <p>สามารถเขียนคำถามไว้ที่ Forum และจะได้คำตอบภายใน 24 ชั่วโมง</p>
                            </li>
                            <li class="question">
                                <p class="faq_head">เนื้อหาและแบบฝึกหัดที่เรียน เพียงพอสำหรับการสอบผ่านใบอนุญาต</p>
                            </li>
                            <li class="answer">
                                <p>แน่นอน</p>
                            </li>
                        </ul>
                    </div>
                    <!-- end text_slide -->
                </div>
                <!-- end cmsk_row1_4col_right -->
            </div>
            <!-- end cmsk_row1_4col_wrap -->
        </div>
        <!-- end wrapper -->
    </div>
    <!-- end cmsk_row1_4col -->
</div>
<!-- end cmsk_main_content -->
<?php include('footer.php'); ?>

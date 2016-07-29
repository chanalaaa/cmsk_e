window.onload = function() {

    /* FLOW player ***********************************/

    $(".player").flowplayer();



    /* modal  ***********************************/
    var loginModal = document.getElementById('loginModal');
    var closeBtn = document.getElementById('modal-close');
    var closeBtn2 = document.getElementById('modal-close2');
    var regisDoneModal = document.getElementById('regisModal_done');
    var btnRegisModal_done = document.getElementById('btnRegisModal_done');
    var courseViewModal = document.getElementById('viewCourseModal');
    //var playCourseBtn = document.getElementById('play');

    $('#login_btn').click(function() {
        loginModal.style.display = "block";
        $('body').css("overflow", "hidden");
    });
    $('#login_btn1').click(function() {
        loginModal.style.display = "block";
        $('body').css("overflow", "hidden");
    });
    $('#login_btn_text').click(function() {
        loginModal.style.display = "block";
        $('body').css("overflow", "hidden");
    });
    $('#btnRegis_done').click(function() {
        regisDoneModal.style.display = "block";
        $('body').css("overflow", "hidden");
    });
    $('.play').click(function() {
        //var videotitle_group = $(this).parents('.course_view-title h2').text();
        var videotitle_group = $(this).parent().parent().parent().find('.course_view-title h2').text();
        var videotitle = $(this).parents('li').text();
        $("span.modal-text_title.videotitle_group").html(videotitle_group.split(" ", 2).join(' ')); //change video title
        $("span.modal-text_title.videoTitle").html(videotitle.slice(0, -1)); //change video title
        // setTimeout(courseViewModal.style.display = "block", 1000);
        courseViewModal.style.display = "block";
        $('body').css("overflow", "hidden");

    });


    $(btnRegisModal_done).click(function() {
        regisDoneModal.style.display = "none";
        $('body').css("overflow", "auto");
    });
    $(closeBtn).click(function() {
        loginModal.style.display = "none";
        $('body').css("overflow", "auto");
        flowplayer().stop();

    });
    $(closeBtn2).click(function() {
        courseViewModal.style.display = "none";
        $('body').css("overflow", "auto");
        flowplayer().stop();
    });

    window.onclick = function(event) {
        if (event.target == loginModal) {
            loginModal.style.display = "none";
            //regisDoneModal.style.display = "none";
            $('body').css("overflow", "auto");
        }
    }

    /* toggle ***********************************/
    $('.toggle_btn').click(function() {
        var toggle_list = $(this).parents(".course_view_list");
        var toggle_target = toggle_list.find(".course_view_sublist");
        var target_has_show = toggle_target.hasClass("active");
        /*
        toggle_target.toggleClass('active'); 
        //jquery style OR
        toggle_target.slideToggle();
         */
        if (target_has_show == 0) {
            $(this).addClass("active");
            toggle_target.addClass("active");
        } else {
            $(this).removeClass("active");
            toggle_target.removeClass("active");
        }

    });
    /* Facebook ***********************************/



};

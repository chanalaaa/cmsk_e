window.onload = function() {

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
        $('body').css("overflow","hidden");
    });
    $('#btnRegis_done').click(function() {
        regisDoneModal.style.display = "block";
        $('body').css("overflow","hidden");
    });
    $('.play').click(function() {
       var videotitle = $(this).parents('li').text();
       $("p.modal-text_title.videoTitle").html(videotitle.slice(0,-1)); //change video title
        // setTimeout(courseViewModal.style.display = "block", 1000);
       courseViewModal.style.display = "block";
        $('body').css("overflow","hidden");

    });

    $(closeBtn).click(function() {
        loginModal.style.display = "none";
         $('body').css("overflow","auto");
       
    });
    $(btnRegisModal_done).click(function() {
        regisDoneModal.style.display = "none";
        $('body').css("overflow","auto");
    });
    $(closeBtn2).click(function() {
        courseViewModal.style.display = "none";
        $('body').css("overflow","auto");
    });

    window.onclick = function(event) {
        if (event.target == loginModal || event.target == regisDoneModal) {
            loginModal.style.display = "none";
            //regisDoneModal.style.display = "none";
             $('body').css("overflow","auto");
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


    /* FLOW player ***********************************/
    $(function() {
        $(".player").flowplayer();
    });

};

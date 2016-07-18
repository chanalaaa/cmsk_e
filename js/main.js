window.onload = function() {

    /* modal  ***********************************/
    var modal = document.getElementById('myModal');
    var modal_done = document.getElementById('myModal_done');
    var span = document.getElementsByClassName("close")[0];

    $('#login_btn').click(function() {
        modal.style.display = "block";
    });
    $('#btn_done').click(function() {
        modal_done.style.display = "block";
    });


    $('span').click(function() {
        modal.style.display = "none";
        modal_done.style.display = "none";
    });

    window.onclick = function(event) {
        if (event.target == modal || event.target == modal_done) {
            modal.style.display = "none";
            modal_done.style.display = "none";
        }
    }

    /* toggle ***********************************/
    $('.toggle_btn').click(function() {
        var toggle_list = $(this).parents(".course_view_list");
        var toggle_target = toggle_list.find(".course_view_sublist");
        var target_has_show = toggle_target.css("display");
        console.log(target_has_show);
      
    });
};

window.onload = function() {

    // Get the modal
    var modal = document.getElementById('myModal');
    var modal_done = document.getElementById('myModal_done');
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    $('#login_btn').click(function() {
        modal.style.display = "block";
    });
     $('#btn_done').click(function() {
        modal_done.style.display = "block";
    });

    // When the user clicks on <span> (x), close the modal

    $('span').click(function() {
        modal.style.display = "none";
        modal_done.style.display = "none";
    });

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal || event.target == modal_done) {
            modal.style.display = "none";
            modal_done.style.display = "none";
        }
    }
};

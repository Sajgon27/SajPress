// LOGOUT BUTTON AND MODAL
//////////////////////////
//////////////////////////

var modal = document.getElementById("modal-logout");
var logoutBtn = document.getElementById("logout-btn");
var closeBtn = document.getElementById("close-logout");
var cancelBtn = document.getElementById("cancel-logout");
var overlay = document.querySelector('.overlay');


logoutBtn.onclick = function() {
    modal.style.display = "block";
    modal.classList.remove('fade');
    overlay.classList.add('bg-overlay-modal');
}

closeBtn.onclick = function() {
    modal.style.display = "none";
    modal.classList.add('fade');
    overlay.classList.remove('bg-overlay-modal');
}

cancelBtn.onclick = function() {
    modal.style.display = "none";
    overlay.classList.remove('bg-overlay-modal');
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        modal.classList.add('fade');
        overlay.classList.remove('bg-overlay-modal');
    }
}


// CHANGING SECTION
//////////////////////////
//////////////////////////
jQuery(document).ready(function($) {
    const loader = document.getElementById('loader');
    const content = document.getElementById('account-content');
    $('.account-btn').click(function() {
        loader.style.display = 'block';
        content.style.display = 'none';
        var section = $(this).data('section'); 

        // AJAX request
        $.ajax({
            url: ajax_object.ajax_url, 
            type: 'POST',
            data: {
                action: 'load_account_section', 
                section: section 
            },
            success: function(response) {
               
                
                content.style.display = 'block';
                loader.style.display = 'none';
                $('#account-content').html(response);
                
            },
            error: function() {
                
                content.style.display = 'block';
                loader.style.display = 'none';
                $('#account-content').html('<p>An error occurred while loading the section.</p>');
            }
        });
    });
});






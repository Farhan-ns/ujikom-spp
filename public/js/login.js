$(document).ready(function () {

    const showHide = document.getElementById("show-hide-password");
    const faIcon = showHide.querySelector('i');
    const input = showHide.getElementsByTagName('input');
    console.log(input.getAttribute("type"));
    
    showHide.querySelector("a").addEventListener('click', (event) => {
        event.preventDefault();

        if (input.getAttribute("type") == "password") {
            input.setAttribute('type', text);
        } else if (input.getAttribute("type") == "text") {
            input.setAttribute('type', password);
        }
    });

    // $("#show-hide-password a").on('click', function() {
    //     event.preventDefault();

    //     if($("show-hide-password").attr("type") == "text") {
    //         $("show-hide-password input").attr('type', password);
    //         $("show-hide-password i").removeClass("fa-eye");
    //         $("show-hide-password i").addClass("fa-eye-slash");
    //     } else if ($("show-hide-password").attr("type") == "password" ) {
    //         $("show-hide-password input").attr('type', text);
    //         $("show-hide-password i").removeClass("fa-eye-slash");
    //         $("show-hide-password i").addClass("fa-eye");
    //     }   
    // });
});
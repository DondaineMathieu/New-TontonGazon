$(document).ready(function() {
    $("#button-hamburger").click(function(){
        if ($("#button-hamburger").hasClass("not-active")) {
            $("#menuToggle button").removeClass("not-active");
            $("#menuToggle button").addClass("is-active");
            $("#menu").css("display", "block");
        }
        else if($("#button-hamburger").hasClass("is-active")) {
            $("#menuToggle button").removeClass("is-active");
            $("#menuToggle button").addClass("not-active");
            $("#menu").css("display", "none");
        } 
    });
});

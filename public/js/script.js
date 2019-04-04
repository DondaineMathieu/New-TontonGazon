$(document).ready(function() {
    $("#button-hamburger").click(function() {
        if ($("#button-hamburger").hasClass("not-active")) {
            $("#menuToggle button").removeClass("not-active");
            $("#menuToggle button").addClass("is-active");
            $("#menu").css("display", "block");
        } else if($("#button-hamburger").hasClass("is-active")) {
            $("#menuToggle button").removeClass("is-active");
            $("#menuToggle button").addClass("not-active");
            $("#menu").css("display", "none");
        } 
    });

    $("#annonces-terminees").click(function() {
        if ($("#annonces-terminees").hasClass("not-active")) {
            $("#annonces-terminees").removeClass("not-active");
            $("#annonces-terminees").addClass("is-active");
            $("#list-terminees").css("display", "block");
        } else if($("#annonces-terminees").hasClass("is-active")) {
            $("#annonces-terminees").removeClass("is-active");
            $("#annonces-terminees").addClass("not-active");
            $("#list-terminees").css("display", "none");
        } 
    });

    $("#annonces-type").click(function() {
        if ($("#annonces-type").hasClass("not-active")) {
            $("#annonces-type").removeClass("not-active");
            $("#annonces-type").addClass("is-active");
            $("#list-type").css("display", "block");
        } else if($("#annonces-type").hasClass("is-active")) {
            $("#annonces-type").removeClass("is-active");
            $("#annonces-type").addClass("not-active");
            $("#list-type").css("display", "none");
        } 
    });
});

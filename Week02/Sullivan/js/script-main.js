$(document).ready(function () {
    $('#sliders').anythingSlider({
        autoPlay: true,
        delay: 5000
    });

    $('.story2').hide();
    $("#next").click(function () {
        $(".story1").hide();
        $(".story2").slideDown("slow");
    });

    $("#previous").click(function () {
        $(".story2").hide();
        $(".story1").slideDown("slow");
    });



});



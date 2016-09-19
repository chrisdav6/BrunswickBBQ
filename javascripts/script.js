$(function() {

	//Fade body on load
	$("body").hide().fadeIn(750);

	//Slick Image Slider
    var slideSettings = {
        autoplay: true,
        autoplaySpeed: 6000,
        fade: true,
        speed: 3000,
        arrows: false,
        mobileFirst: true,
        centerMode: true
    };

	function slick() {
        $('.banner').slick(slideSettings);
    }

    slick();



    //Music Box Bios  

    function bandOverlay() {
        
        $(".band").hover( //Fade out h3 and p on hover
        function() {
            $(this).find("h3").stop().fadeOut();
            $(this).find("p").stop().fadeOut();
            $(".bandOverlay", this).stop().fadeIn();
        }, function() {
            $(this).find("h3").stop().fadeIn();
            $(this).find("p").stop().fadeIn();
            $(".band").removeClass('bandOverlay');
            $(".bandOverlay").stop().fadeOut();
         });
    }

    var windowSize = $(window).width(); // Could've done $(this).width()
    if(windowSize > 450){
        bandOverlay();
    }


    //HoneyPot Form Field
    $("#email").hide();

     
    

});
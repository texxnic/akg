$(document).on('ready', function() {
	var controller = new ScrollMagic.Controller();
new ScrollMagic.Scene({
        duration: $(window).height()/2,
            

        })
        
        .setTween(".pageJumbo__ghost", { right: "5%" })
        
        .addTo(controller);
});
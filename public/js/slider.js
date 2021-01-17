

$(function() {

    //settings for slider
    var width = 100;
    var animationSpeed = 8000;
    var pause = 8000;
    var currentSlide = 1;

    //cache DOM elements
    var $slider = $('.icoSliderBox');
    var $sliderContainer = $slider.find('.slides');
    var $slides = $sliderContainer.find('.slide');

    var interval;

    function startSlider() {
        interval = setInterval(function() {
        	console.log($sliderContainer.css('margin-left'));
        	var newValue = parseInt($sliderContainer.css('margin-left').replace("px", "")) - width;
        	$sliderContainer.css('margin-left', newValue + "px");
                
                if (++currentSlide === $slides.length +1) {
                    currentSlide = 1;
                    $sliderContainer.css('margin-left', 0);

                }
            
        }, pause);
    }
    function pauseSlider() {
        clearInterval(interval);
    }
    function rightMove() {
        $sliderContainer.css('margin-left', "100" + "px");
    }
    function leftMove() {
        clearInterval(interval);
    }
    $slider
        .on('mouseenter', pauseSlider)
        .on('mouseleave', startSlider);
  

    


});

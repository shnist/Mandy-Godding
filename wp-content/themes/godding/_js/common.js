var MGTA = window.MGTA || {};

MGTA = {
	// initialising function
	init: function () {
		if ($('#mapCont').length) {
			this.map();
		}
		if ($('.emailParas').length) {
			this.emailInjection();
		}
		if ($('.vidCont li').length > 1) {
			carousel._create();
		}
		if ($('#teachersTitle').length) {
		    teachers._setUp();
		}
		if ($('.announcement').length) {
			var colorFader = setTimeout(function(){MGTA.subtleFade()}, 1000);
			
		}
		//if($('#advert').length){
		//	this.advert.overlay.init();
		//}
        if ($('#photoShow').length){
            photoShow.init();
        }       
	},
	subtleFade : function () {
		// the current colour
		$('.announcement').each(function () {
			var currentColour = $(this).css('color');
			$(this).animate({
				color : '#000'
			}, 1000, function () {
				$(this).animate({
					color : currentColour
				}, 1000);
			});
		});
		var repeatColorFade = setTimeout(function (){MGTA.subtleFade()}, 2500);
	},
	map: function () {
		// co-ordinates
		var location = new google.maps.LatLng(51.866454,  -2.245339),
		mapOptions = {
			zoom: 15,
			center: location,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};	
		map = new google.maps.Map(document.getElementById("mapCont"), mapOptions);
	
		// setting up the marker for the position on the map
		marker = new google.maps.Marker({
			position: location, 
			map: map,
			title: "Mandy Godding's Theatre Arts"
		});
	},
	emailInjection: function () {
		if ("#dancing-email") {
			$("#dancing-email").append('mandygodding@yahoo.co.uk');
		}
		if ("#singing-email") {
			$("#singing-email").append('singing4stage@yahoo.co.uk');
		}
	},
	advert : {
		hover : function () {
			$('#advert').mouseover(function () {
				$(this).animate({
					left : 0
				}, {'queue' : false});
			});
			$('#advert').mouseout(function () {
				$(this).animate({
					left : -560
				}, {'queue' : false});
			});
			$('#advert').click(function (e) {
				e.preventDefault();
			});
		},
		overlay : {
			init : function () {
				$('#advert').addClass('js')
				$('body').append('<div class="overlay"></div><div class="overlayContainer"><a href="#" class="close">Close</a>'
								 + '<img src="/assets/images/adverts/unchained_melody.jpg" alt="Unchained melody production at Bacon Theatre"></div>');
				MGTA.advert.overlay.eventHandlers();
				$('.overlay').height($(document).height());
			},
			eventHandlers : function () {
				$('.overlayContainer .close').click(function (e) {
					e.preventDefault();
					$('.overlay, .overlayContainer').fadeOut('slow', function (){
						$('.overlay, .overlayContainer').remove();	
					});
				});
			}
		}
	}
};

var carousel = {
    animated : false,
    current : 1,
    total : parseInt($('.vidCont li').length, 10),
    _create: function () {
        $('.vidCont').wrap('<div class="carousel"></div>');
        $('.vidCont').before('<ul class="controls"><li><button class= "prev disabled"></button></li><li><button class="next"></button></li></ul>');
        // adding the active classes
        $('.vidCont li').add('.vidCont li object').add('.vidCont li h3').addClass('active');
        carousel._create_tracker();
        carousel.events();
    },
    _create_tracker : function () {
        $('.controls').before('<p class="range"> Showing ' + carousel.current + ' of  ' + carousel.total + '</p>');
    },
    events : function () {
        var direction = null;
            
        $('button', $('.controls li')).click(function (e) {
            if ($(e.target).hasClass('next')) {
                direction = 'forward';
            } else {
                direction = 'back';
            }
            
            if ($(e.target).hasClass('disabled')) {
                e.preventDefault();
            } else {
                if (carousel.animated === false) {
                    carousel.controls(direction);
                    carousel.animated = true;
                } 
            }
        });
    },
    controls : function (direction) {
        var distance = parseInt($('.vidCont li').css('width'), 10) - 10;
        
        if ($('button', $('.controls li')).hasClass('disabled')) {
            $($('button')).removeClass('disabled');
        }
        
        if (direction === 'forward') {
            if (carousel.current === carousel.total) {
                carousel.current = carousel.total;
            } else {
                carousel.current = carousel.current + 1;
            }
        } else {
            if (carousel.current === 1) {      
                carousel.current = 1;
            } else {
                carousel.current = carousel.current -1;
            }
        }
        
        carousel.animate(direction, distance);
        carousel.updateTracker();
    },
    updateTracker: function () {
        if (carousel.current === 1) {
            $('.prev', $('.controls li')).addClass('disabled');
        }
        if (carousel.current === carousel.total)  {
            $('.next', $('.controls li')).addClass('disabled');
        }
        
        $('.range').replaceWith(carousel._create_tracker());
    },
    animate : function (direction, distance) {
        var currentState = parseInt($('.vidCont').css('right'), 10);
      
        if (direction === 'forward') {
          distance = currentState + distance;
        } else {
          distance = currentState - distance;
        }
        $('.vidCont').animate({right: distance + 'px'}, 'normal' , function () {
            carousel.animated = false;    
        });
    }
};

var teachers = {
    biographies : {
        mandy   : $('img[alt="Mandy Godding"]').parent().siblings('p'),
        michael : $('img[alt="Michael Clifton"]').parent().siblings('p'),
        jackie : $('img[alt="Jackie Shewell-Thomas"]').parent().siblings('p'),
        penny : $('img[alt="Penny Hemms"]').parent().siblings('p'),
        nikki : $('img[alt="Nikki Irving"]').parent().siblings('p')
    },
    _setUp : function () {
        $('img', '#biography-portal').parent().siblings('p').remove();
        $('#biography-portal').addClass('js').append('<div id="bio-container"></div>');
        $(teachers.biographies.mandy).appendTo('#bio-container')
        $('#bio-container').children('p').fadeIn('fast');
        $('.bio-pic').after('<a class="bio-link" href="#">View Biography</a>');
        $('img[alt="Mandy Godding"]').parents('li').addClass('selected');
        teachers.events();
    },
    events : function () {
        var img = $('img.bio-pic', $('li'));
        
        $(img).add('.bio-link', 'li').click(function (e) {
            var teacher = null;
            if($(e.target).attr('alt')){
                teacher = $(this).attr('alt');
            } else {
                teacher = $(this).siblings('img').attr('alt');
            }

            if ($('li').hasClass('selected')) {
                $('li').removeClass('selected');
            }
            
            $(this).parents('li').addClass('selected');
            teachers.textHandler(teacher);
                      
            e.preventDefault();
        });    
    },
    textHandler : function (teacher) {
        var t = teacher;
        if($('#bio-container').children('p').length){
            $('#bio-container').animate({opacity: 0}, 1000, function () {
                $(this).children('p').remove();
                teachers.append(t);
            });
        }        
    },
    append : function (t) {
        switch (t){
            case 'Mandy Godding':
                $(teachers.biographies.mandy).appendTo('#bio-container');
                $('#bio-container').animate({opacity: 1.0}, 1000);
                break;
            case 'Michael Clifton':
                $(teachers.biographies.michael).appendTo('#bio-container');
                $('#bio-container').animate({opacity: 1.0}, 1000);
                break;
            case 'Jackie Shewell-Thomas':
                $(teachers.biographies.jackie).appendTo('#bio-container');
                $('#bio-container').animate({opacity: 1.0}, 1000);
                break;
            case 'Penny Hemms':
                $(teachers.biographies.penny).appendTo('#bio-container');
                $('#bio-container').animate({opacity: 1.0}, 1000);
                break;
            case 'Nikki Irving' :
                $(teachers.biographies.nikki).appendTo('#bio-container');
                $('#bio-container').animate({opacity: 1.0}, 1000);
                break;
            default :
                alert('An error has occured');
        }        
    }
};

var photoShow = window.photoShow || {};

photoShow = function (){

    function setUp (){


    }

    return {
        init: setUp
    };
}


$(document).ready(function () {
	MGTA.init();
});

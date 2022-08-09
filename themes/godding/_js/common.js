var MGTA = window.MGTA || {};

const nav = document.querySelector('#nav');
const menu = document.querySelector('#menu');
const header = document.querySelector('header');
const menuToggle = document.querySelector('.nav__toggle');
let isMenuOpen = false;

// TOGGLE MENU ACTIVE STATE
menuToggle.addEventListener('click', e => {
  e.preventDefault();
  isMenuOpen = !isMenuOpen;

  // toggle a11y attributes and active class
  menuToggle.setAttribute('aria-expanded', String(isMenuOpen));
  menu.hidden = !isMenuOpen;
  header.classList.toggle('nav--open');
});


// TRAP TAB INSIDE NAV WHEN OPEN
nav.addEventListener('keydown', e => {
  // abort if menu isn't open or modifier keys are pressed
  if (!isMenuOpen || e.ctrlKey || e.metaKey || e.altKey) {
    return;
  }

  // listen for tab press and move focus
  // if we're on either end of the navigation
  const menuLinks = menu.querySelectorAll('.nav__link');
  if (e.keyCode === 9) {
    if (e.shiftKey) {
      if (document.activeElement === menuLinks[0]) {
        menuToggle.focus();
        e.preventDefault();
      }
    } else if (document.activeElement === menuToggle) {
      menuLinks[0].focus();
      e.preventDefault();
    }
  }
});


MGTA = {
	// initialising function
	init: function () {
		if ($('#mapCont').length) {
			this.map();
		}
		if ($('.vidCont li').length > 1) {
			carousel._create();
		}
		if ($('.announcement').length) {
			var colorFader = setTimeout(function(){MGTA.subtleFade()}, 1000);
		}
		if($('#advert').length){
			this.advert.overlay.init();
		}
        // if ($('#slideShow').length){
        //     $('#slideShow').slick({
        //         dots: true,
        //         autoplay: true,
        //         autoplayspeed: 5000,
        //         speed: 750,
        //         fade: true,
        //         cssEase: 'ease-in',
        //         appendDots: $('header')
        //     });
        // }
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
        if (typeof google === 'undefined') {
            return;
        }

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
	advert : {
		overlay : {
			init : function () {
				$('.overlay').addClass('js');
				MGTA.advert.overlay.eventHandlers();
				$('.overlay').height($(document).height());
			},
			eventHandlers : function () {
				$('.overlayContainer .close, .overlay').click(function (e) {
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


$(document).ready(function () {
	MGTA.init();
});

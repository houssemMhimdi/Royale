(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		$(document).ready(function(){//Carousel Slider .
			$('.paca-carousel-wrap').show(0);
			$('.paca-slider-carousel').slick({
				infinite: true,
				prevArrow : '<button type="button" class="fa fa-angle-left slick-prev"></button>',
				nextArrow : '<button type="button" class="fa fa-angle-right slick-next"></button>',
				cssEase: 'linear',
				adaptiveHeight: false,
			});


			$('.papacig_slider').show(0);
			$('.paca-slider').slick({
				infinite: true,
				prevArrow : '<button type="button" class="fa fa-angle-left slick-prev"></button>',
				nextArrow : '<button type="button" class="fa fa-angle-right slick-next"></button>',
				cssEase: 'linear',
				adaptiveHeight: false,
				fade: true,
			});	
			$('.paca-slider').on('afterChange', function(event, slick, currentSlide){
				$(this).find('.contents').fadeIn(parseInt(slick.options.speed + slick.options.speed/2));
			});

			$('.paca-slider').on('beforeChange', function(event, slick, currentSlide){
				$(this).find('.contents').fadeOut(parseInt(slick.options.speed - slick.options.speed/2 ));
			});



			$('.grids-item-slider').slick({
				infinite: false,
				prevArrow : '<button type="button" class="fa fa-angle-left slick-prev"></button>',
				nextArrow : '<button type="button" class="fa fa-angle-right slick-next"></button>',
				cssEase: 'linear',
				adaptiveHeight: false,
				slidesToShow: 1, 
				slidesToScroll: 1,
				speed:300,
				dots:true,
			});	

		});

		$('.masonry-grid').masonry({
		  itemSelector: '.masonry-grid-item',
		  columnWidth: '.masonry-grid-item',
		});		
        $(document).ready(function(){
            $('.lightgallery').lightGallery({
            	selector: '.icon-lightgallery',
            });
        });

        //Progress bar.
        $('.paca-progress-bar').each(function(){
        	var score = $(this).find('.paca-progress-bar-front').attr('data-score');
        	$(this).find('.paca-progress-bar-front').animate({
        		'width':score+'%',
        	},800);

		    $(this).find('.paca-progress-bar-counter').prop('Counter',0).animate({
		        Counter: score
		    }, {
		        duration: 4000,
		        easing: 'swing',
		        step: function (now) {
		            $(this).text(Math.ceil(now));
		        }
		    });


        });



	});
	
})(jQuery, this);
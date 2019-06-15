(function($){
	function Core(){
		var self = this;
        var change = true;
    	$('#nav-icon1').click(function(){
            $(this).toggleClass('open');
            $('.drop-down').slideToggle();
    	});

        $('#nav-icon2').click(function(){
            $(this).toggleClass('open');
            $('.drop-down-2').slideToggle();
        });

    var offset_top1 = $('.emblem');
    if(offset_top1.length>0){
        var offset_top = $('.emblem').offset().top;
        var scroll_top;
        var sticky_navigation = function(){
            scroll_top = $(window).scrollTop();
            if(scroll_top>offset_top+30){
                $('.navbar-headcontainer-clone').addClass('stick');
                $('.drop-down-2').css({"display":"none"});
                $('#nav-icon2').removeClass('open');
            } else {
                $('.navbar-headcontainer-clone').removeClass('stick');
                $('#nav-icon1').removeClass('open');
                $('.drop-down').css({"display":"none"});
            }
        }
        
        sticky_navigation();
        $(window).scroll(function(){
            sticky_navigation();
        });
    } else {
        
    }
        
        $(window).load(function(){'use strict';
            var $portfolio_selectors = $('.work-filter >li>a');
            var $portfolio = $('.work-items');
            $portfolio.isotope({
                itemSelector : '.work-item',
                layoutMode : 'fitRows'
            });

            $portfolio_selectors.on('click', function(){
                $portfolio_selectors.removeClass('active');
                $(this).addClass('active');
                var selector = $(this).attr('data-filter');
                $portfolio.isotope({ filter: selector });
                return false;
            });
        });

        new WOW().init();
        
        $(document).ready(function() {
          $("html,body").animate({scrollTop: 0}, 100); //100ms for example
        });
        
        
    }
    
    
    $.fn.Core = function(config){

        var options = {
        	
        }

        $.extend(options, config);

        new Core();

        return this;
    }
}(jQuery))
jQuery(window).load(function() {
    jQuery(".preloader").delay(1000).fadeOut();
});

jQuery(document).ready(function() {
function setMyCookie() {
    myCookieVal = jQuery('.panleload').hasClass('sktsidepanel') ? 'isActive' : 'notActive';
    jQuery.cookie('myCookieName', myCookieVal, { path: '/' });    
}

if (jQuery.cookie('myCookieName') == 'isActive') {
    jQuery('.panleload').addClass('sktsidepanel');    
} else {
    jQuery('.panleload').removeClass('sktsidepanel');
}

jQuery("#colclose").click(function () {
    jQuery('.panleload').toggleClass('sktsidepanel');
    setMyCookie();
});
});

/* Toggle Menu Code */
jQuery(document).ready(function () {
	jQuery(".show_hide1").hide();
});	

jQuery(document).ready(function () {
    updateContainer();
    jQuery(window).resize(function() {
        updateContainer();
    });
});
function updateContainer() {
    var $containerWidth = jQuery(window).width();
    if ($containerWidth <= 990) {
        jQuery('#lensmenu').css({
            display: 'none',
        });
		
        jQuery('.top-social-box').css({
            display: 'none',
        });		
		
        jQuery('.widgetbox').css({
            display: 'none',
        });			
		
		jQuery('.show_hide').click(function(e){
		
		jQuery(".show_hide").hide();	
		jQuery(".show_hide1").show();
			
		e.preventDefault();
		jQuery("#lensmenu").slideDown(500);
		jQuery(".top-social-box").slideDown(500);
		jQuery(".widgetbox").slideDown(500);
		
		jQuery('#lensmenu').css({
            display: 'block'
        });
        jQuery('.show_hidesoc').css({
            display: 'block'
        });		
        jQuery('.top-social-box').css({
            display: 'block'
        });	
        jQuery('.widgetbox').css({
            display: 'block'
        });	
		});
		
		jQuery('.show_hide1').click(function(e){
			
		jQuery(".show_hide1").hide();	
		jQuery(".show_hide").show();
		
		e.preventDefault();
		jQuery("#lensmenu").slideUp(500);
		jQuery(".top-social-box").slideUp(500);
		jQuery(".widgetbox").slideUp(500);
 	
		});
    }
    if ($containerWidth > 990) {
        jQuery('#lensmenu').css({
            display: 'block'
        });
        jQuery('.show_hidesoc').css({
            display: 'block'
        });		
        jQuery('.top-social-box').css({
            display: 'block'
        });	
        jQuery('.widgetbox').css({
            display: 'block'
        });				
    }
}
/* Toggle Menu Code */

jQuery(window).load(function(){
				jQuery("#content-1").mCustomScrollbar({
					theme:"minimal"
				});
				
				jQuery("#lens-sidebar").mCustomScrollbar({
					theme:"minimal-dark"
				});				
				
			});
			
( function( jQuery ) {
jQuery( window ).load(function() {
jQuery('#lensmenu li.has-sub>a').on('click', function(){
		jQuery(this).removeAttr('href');
		var element = jQuery(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp();
		}
		else {
			element.addClass('open');
			element.children('ul').slideDown();
			element.siblings('li').children('ul').slideUp();
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp();
		}
	});

	jQuery('#lensmenu>ul>li.has-sub>a').append('<span class="holder"></span>');

	(function getColor() {
		var r, g, b;
		var textColor = jQuery('#lensmenu').css('color');
		textColor = textColor.slice(4);
		r = textColor.slice(0, textColor.indexOf(','));
		textColor = textColor.slice(textColor.indexOf(' ') + 1);
		g = textColor.slice(0, textColor.indexOf(','));
		textColor = textColor.slice(textColor.indexOf(' ') + 1);
		b = textColor.slice(0, textColor.indexOf(')'));
		var l = rgbToHsl(r, g, b);
		if (l > 0.7) {
			jQuery('#lensmenu>ul>li>a').css('text-shadow', '0 1px 1px rgba(0, 0, 0, .35)');
			jQuery('#lensmenu>ul>li>a>span').css('border-color', 'rgba(0, 0, 0, .35)');
		}
		else
		{
			jQuery('#lensmenu>ul>li>a').css('text-shadow', '0 1px 0 rgba(255, 255, 255, .35)');
			jQuery('#lensmenu>ul>li>a>span').css('border-color', 'rgba(255, 255, 255, .35)');
		}
	})();

	function rgbToHsl(r, g, b) {
	    r /= 255, g /= 255, b /= 255;
	    var max = Math.max(r, g, b), min = Math.min(r, g, b);
	    var h, s, l = (max + min) / 2;

	    if(max == min){
	        h = s = 0;
	    }
	    else {
	        var d = max - min;
	        s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
	        switch(max){
	            case r: h = (g - b) / d + (g < b ? 6 : 0); break;
	            case g: h = (b - r) / d + 2; break;
	            case b: h = (r - g) / d + 4; break;
	        }
	        h /= 6;
	    }
	    return l;
	}
});
} )( jQuery );
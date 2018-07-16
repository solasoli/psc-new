// JavaScript Document
jQuery(document).ready(function(){
	jQuery('.testi-item .text').responsiveEqualHeightGrid();	
	jQuery('.same-height').responsiveEqualHeightGrid();	
	jQuery('.catelog-item .thumb').responsiveEqualHeightGrid();	
	jQuery('.featured-bottom .block-item').responsiveEqualHeightGrid();	
	
	jQuery('.product_info').responsiveEqualHeightGrid();
	jQuery('.product-item .feat_info').responsiveEqualHeightGrid();
		
	
	//alert(jQuery('#billing_address_1').attr("placeholder", "Address"));
	
	jQuery('.plus').on('click',function(e){
		//alert('plus before');
		e.preventDefault();
		var val = parseInt(jQuery(this).prev('input').val());
		//jQuery( 'input[name="update_cart"]' ).prop( 'disabled', false );
		//alert(val);
		jQuery(this).prev('input').val( val+1 );
		//alert('dfdf');
		jQuery("[name='update_cart']").removeAttr('disabled');
		jQuery("input[name='update_cart']").trigger("click");
	});

	jQuery('.minus').on('click',function(e){
		e.preventDefault();
		var val = parseInt(jQuery(this).next('input').val());
		if(val !== 1){
			jQuery(this).next('input').val( val-1 );
		} 
		jQuery("input[name='update_cart']").removeAttr("disabled");
		jQuery("input[name='update_cart']").trigger("click");
	});
	
	jQuery(".option-select").chosen({disable_search_threshold: 10});
	
	
	jQuery('#menu-opener').click(function(){
		jQuery('#mobile_menu').addClass('open');
	});
	jQuery('.menu-overlay').click(function(){
		jQuery('#mobile_menu').removeClass('open');
	});
	
	jQuery('#down-arrow a').click(function(event){
		var $anchor = jQuery(this);
			jQuery('html, body').stop().animate({
				scrollTop: jQuery($anchor.attr('href')).offset().top
			}, 600);
			event.preventDefault();
	});
	
	// Modal Vertically Center
	function centerModals($element) {
		var $modals;
		if ($element.length) {
	   $modals = $element;
		} else {
	   $modals = jQuery('.modal-vcenter:visible');
		}
		$modals.each( function(i) {
	   var $clone = jQuery(this).clone().css('display', 'block').appendTo('body');
	   var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
	   top = top > 0 ? top : 0;
	   $clone.remove();
	   jQuery(this).find('.modal-content').css("margin-top", top);
		});
	 }
	  
	 jQuery('.modal-vcenter').on('show.bs.modal', function(e) {
	   centerModals(jQuery(this));
	 });
	 jQuery(window).on('resize', centerModals);
	 
	 stickyFooter();
	 
	 
});


/*jQuery(function(){
	
	var windowWidth = jQuery('.container').outerWidth();
	if(windowWidth == 710){
	
		if (navigator.userAgent.indexOf('Mac OS X') != -1) {
		  jQuery(".header-right li a").css("padding", "10px 10px 8px");
		  
		}
		
		if(navigator.userAgent.indexOf('Mac') > 0 && navigator.userAgent.indexOf('Firefox') > 0){
			jQuery(".header-right li a").css("padding", "10px 10px 8px");
			
		}
		
		if(navigator.userAgent.indexOf('Mac') > 0 && navigator.userAgent.indexOf('Chrome') > 0){
		  jQuery(".header-right li a").css("padding", "10px 10px 8px");
		  
		}
	}
});
*/



jQuery(window).bind('resize', function(e){
	setTimeout('stickyFooter()', 250);
});

function stickyFooter(){
	var windowHeight = jQuery(window).outerHeight();
	var main_wrap = jQuery('.main_wrap').outerHeight();
	var footerHeight = jQuery('.footer').outerHeight();
	var fullContentHeight = main_wrap + footerHeight;
	//alert(windowHeight);
	//alert(fullContentHeight);
	
	if(windowHeight > fullContentHeight){
		jQuery('.footer').addClass('fixed');
	}else{
		jQuery('.footer').removeClass('fixed');
	}
}



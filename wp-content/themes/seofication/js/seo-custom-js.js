jQuery( document ).ready( function( $ ) {

		// for sidebar toggle on shop page js
	if(jQuery(window).width()<767){ 
		
		jQuery("#sidebar1").hide();
		
		jQuery(".filter-area").click(function(){
			
			jQuery("#sidebar1").slideToggle();
		
		});

	}
	
	// for submenu dropdown on tab and mobile
		if(jQuery(window).width()<=1024){ 
			
			$( ".main-navigation ul li.menu-item-has-children" ).prepend( '<span class="fa fa-plus"></span>' );
			
			$('.main-navigation ul li.menu-item-has-children .fa.fa-plus').click(function(){
				
				$(this).next().next().slideToggle();
				
				$(this).toggleClass('fa-plus fa-minus');
				
			});

		}
		
	// for search form hide show
		jQuery(".seo-search-icon").click(function(){
			
			jQuery(".seo-search-form").toggleClass('active');
			
			jQuery(".seo-search-icon .fa").toggleClass('fa-search fa-times');
		});
	
});
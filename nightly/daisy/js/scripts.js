/*!
* AKANA.JS
*
* Main scripts file. Contains theme functionals.
*
* Version 1.0
*/

/* 
-----------------------------------------------------------------------------------------------------------*/

$(document).ready(function($) {

    "use strict";

    var aSearchClicked = false;
    
    jQuery(".sub-menu").hide();
    jQuery(".container").hide();
        
    if("ontouchstart" in document.documentElement) {
    
        
        $('#a-sidebar').bind('touchstart touchon', function(event){
            if(aSearchClicked){
                $('#searchform').removeClass('moved');
                aSearchClicked = false;
            }
         });
        
        $('#a-search').bind('touchstart touchon', function(event){
            if(aSearchClicked){
                $('#searchform').removeClass('moved');
                aSearchClicked = false;
            }else{
                $('#searchform').addClass('moved');
                aSearchClicked = true;
            }
        });
    
        
    } else {
        
        jQuery('#a-sidebar').bind('click', function(event){
            if(aSearchClicked){
                jQuery('#searchform').removeClass('moved');
                aSearchClicked = false;
            }
         });
    
        jQuery('#a-search').bind('click', function(event){
            if(aSearchClicked){
                jQuery('#searchform').removeClass('moved');
                aSearchClicked = false;
            }else{
                jQuery('#searchform').addClass('moved');
                aSearchClicked = true;
            }
        });
    }
    
    /* Toggle for menu subcategories
    	*
    *
    * @since 3.1
    *
    */
    
    jQuery(".menu-item-has-children").click(function(event){
    	event.preventDefault();
    	jQuery(this).children(".sub-menu").toggleClass("active").toggle(350);
    	return false;
    }).children(".sub-menu").children("li").click(function(event){
    
        window.location.href = jQuery(this).children("a").attr("href");
    });
    
    // Disable swipe on slider for class .disableswipe
    jQuery( document ).on( "swipeleft swiperight", '.disableswipe', function ( e ) {
        e.stopPropagation();
        e.preventDefault();
    });
    
		// Sidebar swipe opening/closing
		jQuery( document ).on( "swipeleft swiperight", function( e ) {
		
			if ( $.mobile.activePage.jqmData( "panel" ) !== "open" ) { // if panel isn't already open
		  	if ( e.type === "swipeleft"  ) { // if the swipe is from right to left
		  		jQuery( "#sidebar-right" ).panel( "open" ); // open right sidebar
		  		if(aSearchClicked){
		  		    jQuery('#searchform').removeClass('moved');
		  		    aSearchClicked = false;
		  		}
		    } else if ( e.type === "swiperight" ) { // if the swipe is from left to right
		    	jQuery( "#sidebar" ).panel( "open" ); // open (left) sidebar with ID #sidebar
		    	if(aSearchClicked){
		    	    jQuery('#searchform').removeClass('moved');
		    	    aSearchClicked = false;
		    	}
		  	} 
		  	
		 	}
		 });
});
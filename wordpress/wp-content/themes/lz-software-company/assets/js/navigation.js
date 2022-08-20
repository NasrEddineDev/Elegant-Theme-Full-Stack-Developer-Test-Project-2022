/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
   	});

 	$( window ).scroll( function() {
		if ( $( this ).scrollTop() > 200 ) {
			$( '.back-to-top' ).addClass( 'show-back-to-top' );
		} else {
			$( '.back-to-top' ).removeClass( 'show-back-to-top' );
		}
	});

	// Click event to scroll to top.
	$( '.back-to-top' ).click( function() {
		$( 'html, body' ).animate( { scrollTop : 0 }, 500 );
		return false;
	});
});

function lz_software_company_open() {
	jQuery(".sidenav").addClass('show');
}
function lz_software_company_close() {
	jQuery(".sidenav").removeClass('show');
}
function lz_software_company_menuAccessibility() {
	var links, i, len,
	    lz_software_company_menu = document.querySelector( '.nav-menu' ),
	    lz_software_company_iconToggle = document.querySelector( '.nav-menu ul li:first-child a' );
    
	let lz_software_company_focusableElements = 'button, a, input';
	let lz_software_company_firstFocusableElement = lz_software_company_iconToggle; // get first element to be focused inside menu
	let lz_software_company_focusableContent = lz_software_company_menu.querySelectorAll(lz_software_company_focusableElements);
	let lz_software_company_lastFocusableElement = lz_software_company_focusableContent[lz_software_company_focusableContent.length - 1]; // get last element to be focused inside menu

	if ( ! lz_software_company_menu ) {
    	return false;
	}

	links = lz_software_company_menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
	    links[i].addEventListener( 'focus', toggleFocus, true );
	    links[i].addEventListener( 'blur', toggleFocus, true );
	}

	// Sets or removes the .focus class on an element.
	function toggleFocus() {
      	var self = this;

     	 // Move up through the ancestors of the current link until we hit .mobile-menu.
      	while (-1 === self.className.indexOf( 'nav-menu' ) ) {
	      	// On li elements toggle the class .focus.
	      	if ( 'li' === self.tagName.toLowerCase() ) {
	          	if ( -1 !== self.className.indexOf( 'focus' ) ) {
	          		self.className = self.className.replace( ' focus', '' );
	          	} else {
	          		self.className += ' focus';
	          	}
	      	}
	      	self = self.parentElement;
      	}
	}
    
	// Trap focus inside modal to make it ADA compliant
	document.addEventListener('keydown', function (e) {
	    let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

	    if ( ! isTabPressed ) {
	    	return;
	    }

	    if ( e.shiftKey ) { // if shift key pressed for shift + tab combination
	      	if (document.activeElement === lz_software_company_firstFocusableElement) {
		        lz_software_company_lastFocusableElement.focus(); // add focus for the last focusable element
		        e.preventDefault();
	      	}
	    } else { // if tab key is pressed
	    	if (document.activeElement === lz_software_company_lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
		      	lz_software_company_firstFocusableElement.focus(); // add focus for the first focusable element
		      	e.preventDefault();
	    	}
	    }
	});   
}

jQuery(function($){
	$('.mobile-menu').click(function () {
	    lz_software_company_menuAccessibility();
	});
	$('.search-toggle').click(function () {
	    lz_software_company_trapFocus($('.search-outer'));
  	});
});

function lz_software_company_search_open() {
	jQuery(".search-outer").addClass('show');
}
function lz_software_company_search_close() {
	jQuery(".search-outer").removeClass('show');
}

function lz_software_company_trapFocus(elem) {

    var lz_software_company_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');

    var lz_software_company_firstTabbable = lz_software_company_tabbable.first();
    var lz_software_company_lastTabbable = lz_software_company_tabbable.last();
    /*set focus on first input*/
    lz_software_company_firstTabbable.focus();

    /*redirect last tab to first input*/
    lz_software_company_lastTabbable.on('keydown', function (e) {
        if ((e.which === 9 && !e.shiftKey)) {
            e.preventDefault();
            lz_software_company_firstTabbable.focus();
        }
    });

    /*redirect first shift+tab to last input*/
    lz_software_company_firstTabbable.on('keydown', function (e) {
        if ((e.which === 9 && e.shiftKey)) {
            e.preventDefault();
            lz_software_company_lastTabbable.focus();
        }
    });

    /* allow escape key to close insiders div */
    elem.on('keyup', function (e) {
        if (e.keyCode === 27) {
            elem.hide();
        }
        ;
    });
};
jQuery(document).ready(function($) {

    $('#menu-main-menu .menu-item-has-children > a').click(function(e){
    	e.preventDefault();
    	$(this).siblings('.sub-menu').slideToggle();
    });



});
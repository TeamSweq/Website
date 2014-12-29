//Hides small menu
$( "#smallmenu" ).hide( 0 );
$( "#smallmenu" ).css( "opacity", "1" );
//Check when the user scrolls past the first menu
$(window).bind("scroll", function() {
	if ($(this).scrollTop() > 300) {
		$( "#smallmenu" ).fadeIn( 500 );
	} else {
		$( "#smallmenu" ).fadeOut( 500 );
	}
});
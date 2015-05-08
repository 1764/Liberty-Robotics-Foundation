+function ($) {
	var pathArray = window.location.pathname.split( '/' );
	var secondLevelLocation = pathArray[0];
	window.alert(pathArray[3]);
}(jQuery);
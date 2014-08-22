$(document).ready(function() {
	
	$('.nav-toggle').click(function() {
		
		$('nav').slideToggle("fast");
		
	});
	
	$('.view-abstract').click(function() {
		
		$(this).next('.abstract').slideToggle();
		
		var currentName = $(this).html();
		
		if ( currentName == 'View Abstract' ) {
			$(this).html('Hide Abstract');			
		} else {
			$(this).html('View Abstract');
		}
		
		return false;
		
	});
	
});
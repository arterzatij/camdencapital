
jQuery(function() {
	    var dynamic_background = [

		//About
		{_class:'about', route: '/about/'},
		{_class:'about', route: '/about/board/'},
		{_class:'about', route: '/about/leadership/'},

		//Aproach
		{_class:'aproach', route: '/aproach/'},   
		{_class:'aproach', route: '/aproach/holistic-planning/'},		
		{_class:'aproach', route: '/aproach/financial-insight/'},
		{_class:'aproach', route: '/aproach/investment-access/'},
		{_class:'aproach', route: '/aproach/relentless-service/'},

		//Recognition
		{_class:'recognition', route: '/recognition/'},

		//Contact
		{_class:'contact', route: '/contact/'}
	
	];

	dynamic_background.forEach( function (element) {
		if(location.pathname == "/camdencapital"+element.route){ 
			jQuery('#multiback').addClass(element._class);
			
		}
	});
});



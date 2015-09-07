

jQuery(document).ready(function($) {
   $('.popup').click(function(e) {
		  var url = $(this).attr('href');
//		  $('div#cboxLoadedContent').load(url); // load the html response into a DOM element		  
		  $(this).next().load(url).show();
		  e.preventDefault(); // stop the browser from following the link
    });
});


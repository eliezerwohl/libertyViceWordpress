$( document ).ready(function() {
	var bio =	$("#bio"); 
	$(".memberButton").on("click", function(){
		$(".memberButton").removeClass("active");
		$(this).addClass("active");
		var message = this.dataset.bio;
		//mobilefix
		$('html, body').animate({
	    scrollTop: bio.offset().top
	  }, 2000);
		bio.fadeOut("fast", function(){
			$.when( bio.empty() ).done(function( x ) {
				$.when( bio.append(message) ).done(function( x ) {
					bio.fadeIn();
				});
			});
		});
	});
});
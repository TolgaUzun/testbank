$(document).ready(function(e) {
  $tik = 0;
  $("#user").click(function(){
  	if ($tik == 0) 
  	{
	    $("#user span").hide(function(){
	    	$("#masthead").css({'border-radius':'6px 6px 0 0'});
	    });
	    $("#toggle").slideDown();
	    $("#user i").removeClass("fa-bars");
	    $("#user i").addClass("fa-times");
	    $tik = 1;
	}
	else
	{
	    $("#user span").show();
	    $("#masthead").css({'border-radius':'6px'});
	    $("#toggle").slideUp();
	    $("#user i").removeClass("fa-times");
	    $("#user i").addClass("fa-bars");
    	$tik = 0;
	}
  });
  $("#cat li:nth-child(1) form button i").addClass("fa-graduation-cap");
  $("#cat li:nth-child(2) form button i").addClass("fa-flask");
  $("#cat li:nth-child(3) form button i").addClass("fa-globe");
  $("#cat li:nth-child(4) form button i").addClass("fa-shield");
  $("#cat li:nth-child(5) form button i").addClass("fa-moon-o");
  $("#cat li:nth-child(6) form button i").addClass("fa-trophy");
  $("#cat li:nth-child(7) form button i").removeClass("fa-book");
  $("#cat li:nth-child(7) form button i").addClass("fa-university");
});


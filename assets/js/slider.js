$(document).ready(function(e) {
	$slayt_say = $("#slider ol li").length;
	$slayt_gen = $("#register").width();
	$toplam_gen = $slayt_gen * $slayt_say;
	$sayac = 0;
	$deger = 0;
	$("#slider ol li").css("width",$slayt_gen+"px");
	$("#slider ol").css("width",$toplam_gen+"px");

    $("#slider ol li").css('width',$("#slider").width());
    $("#slider ol li").css('height',$("#slider").width());

	$(window).resize(function(){
		$("#slider ol li").css('width',$("#slider").width());
	    $("#slider ol li").css('height',$("#slider").width());

		$slayt_say = $("#slider ol li").length;
		$toplam_gen = $slayt_gen * $slayt_say;

		$("#slider ol li").css("width",$slayt_gen+"px");
		$("#slider ol").css("width",$toplam_gen+"px");

	    $slayt_gen = $("#slider").width();
	    $sayac=0;
	    $deger=0;
		$("#slider").animate({marginLeft:0+"px"});
	});

	setInterval(function(){
		if($sayac<$slayt_say-1)
		{
			$sayac++;
			$deger = $sayac * $slayt_gen;
			$("#slider").animate({marginLeft:"-"+$deger+"px"},500);
		}
		else
		{
			$sayac=0;
			$("#slider").animate({marginLeft:0+"px"});
		}
	},4000);

})
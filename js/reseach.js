$(function() {
	$(".headerMain").css({'box-shadow':'none','background-color':'#FF5722','color':'#fff'});
	$(".headerSubcontent").css("background-color","#FF5722");
	$(".mainImg").css("background-color","#FF5722");
	$(".headerMain").hide();

	$(".mainImg").slideDown('slow');
	$(".main").fadeIn("slow");

	$(window).scroll(function() {
		var main = document.body.scrollTop;
		// $(".mainPage").text(main);
		if (main > 147) {
			$(".headerMain").fadeIn();
			$('#tag').text('考研札记');
			if(main > 250 ){
				$(".headerMain").css('box-shadow',"0px 5px 10px #999");
			}else{
				$(".headerMain").css('box-shadow',"none");
			}
		}else{
			$(".headerMain").fadeOut();
			$(".headerMain").css('box-shadow',"none");
		}
	});
});
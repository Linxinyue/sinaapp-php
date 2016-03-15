$(function() {
	$('.searchInput').focus(function(event) {
		if ($('.searchInput').val() == "") {
			$('.prompt').animate({
				left: '-=60px',
				fontSize: "12pt"
			}, "slow");
		}
	});
	$('#searchImg').click(function() {
		var width = $('.mobileSearch').css("width");
		if (width == "0px") {
			$('.mobileSearch').animate({
					width: "70%"
				},
				"slow");
		}else{
			location.href="../kown.php?wd="+$('.mobileInput').val();
		}
	});
	$("#menuImg").click(function(){
		$(".entry").slideToggle();
	});

});

function lostFocus() {
	if ($('.searchInput').val() == "") {
		$('.prompt').animate({
			left: '+=60px',
			fontSize: '16pt'
		}, "slow");
	}
}
function mobileInputLostFocuse(){
	if ($('.mobileInput').val() == "") {
		$('.mobileSearch').animate({
					width: "0px"
				},
				"slow");
	}
}
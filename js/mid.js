var n = 0,
	rotINT;
$(function() {

	$(".control").click(function() {
		clearInterval(rotINT);
		rotINT = setInterval("myCode()", 10);

		$('.showOptions').slideToggle();
	});

});

function myCode() {
	n = n + 1;
	document.getElementById("control").style.webkitTransform = "rotate(" + n + "deg)"
	if (n % 45 == 0) {
		clearInterval(rotINT);
	}
}
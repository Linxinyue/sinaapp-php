$(function(){
	$(".headerMain").slideToggle('slow');
	$(".headerContent").click(function(){
		var direction=$(this).text();
		if(direction=="首页"){
			location.href="../index.php"
		}else if(direction=="技术"){
			location.href="../tech.php"
		}else if(direction=="文章"){
			location.href="../essay.php"
		}else if(direction=="摄影"){
			location.href="http://linxinyue.lofter.com/?page=1&t=-1424702201366"
		}
	});
	$(".headerSubcontent").click(function(){
		var direction=$(this).text();
		if(direction=="考研札记"){
			location.href="../research.php"
		}else if(direction=="生活琐记"){
			location.href="../life.php"
		}
	});
});
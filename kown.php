<!DOCTYPE html>
<html>
<head>
	<title>几个问题</title>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/know.css">
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
</head>
<body>
	<div class="header">
		<div class="find">
			<div class="mobileSearch">
				<form>
					<input class="mobileInput" id="mobileInput" onblur="mobileInputLostFocuse()" name="wd" type="text" placeholder="关键字" />
				</form>
			</div>
			<img class="findImg" id="searchImg" src="img/search.png">
		</div>
		<div class="menu">
			<img  class="findImg" id="menuImg" src="img/meun.png">
			<div class="entry">
				<a href="index.php"><div class="subEntry">首页</div></a>
				<a href="tech.php"><div class="subEntry">技术</div></a>
				<a href="research.php"><div class="subEntry">考研</div></a>
				<a href="life.php"><div class="subEntry">生活</div></a>
				<a href="essay.php"><div class="subEntry">文章</div></a>
				<a href="mid.php"><div class="subEntry">大事记</div></a>
			</div>
		</div>
	</div>
	<div class="mainQuestionsPage">	
		<div class="searchPart">
			<div class="inputDiv">
				<form action="kown.php" >
					<input class="searchInput" onblur="lostFocus()" type="text" name="wd"  />
				</form>
			</div>
			<div class="prompt">
				关键字
			</div>
		</div>
            <?php 
				$counter=0;
            	$mysql  =   new SaeMysql();
            	$sql    =   "SELECT * FROM `question` order by id desc";
            	$result    =   $mysql->getData($sql);
				foreach ($result as $row){
                   
                    // echo "<div class='singlePage'><a href='page.php?table=tech&id=".$row['id']."'><div class='singleTitle' >".$row['title']."</div></a><div class='singleContent'>".$row['abstract']."...</div><div class='singleTime'>".$row['time']."</div></div>";
                	
                    if($counter==0){
                        echo "<div class='singleQuestion' id='firstQuestion'><a href='page.php?table=question&id=".$row['id']."'><div class='questionTitle'>".$row['title']."</div></a><div class='questionContent'>".$row['abstract']."</div></div>";
                    	$counter=1;
                    }else{
                    	 echo "<div class='singleQuestion'><a href='page.php?table=question&id=".$row['id']."'><div class='questionTitle'>".$row['title']."</div></a><div class='questionContent'>".$row['abstract']."</div></div>";
                    }
                }
            ?>
	</div>

		<div class="options">
		<div class="showOptions">
			<a href="mid.php"><div class="hideOption">大事</div></a>
			<a href="index.php"><div class="hideOption">首页</div></a>
		</div>

		<div class="control" >
			<div id="control">+</div>
		</div>
	</div>

<script type="text/javascript" src="js/know.js"></script>
<script type="text/javascript" src="js/mid.js"></script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>考研札记</title>
	<link rel="stylesheet" type="text/css" href="style/tech.css">
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="theme-color" content="#FF5722" >
</head>
<body>
<?php include_once("header.php") ?>
	
	<div class="mainImg" id="mainImg">
		考研札记
	</div>
	<div class="main" id="main">
		
		<div class="mainPage">
			<?php 
            	$mysql  =   new SaeMysql();
            	$sql    =   "SELECT * FROM `postgraduate` order by id desc";
            	$result    =   $mysql->getData($sql);
				foreach ($result as $row){
                    echo "<div class='singlePage'><a href='page.php?table=postgraduate&id=".$row['id']."'><div class='singleTitle' >".$row['title']."</div></a><div class='singleContent'>".$row['abstract']."...</div><div class='singleTime'>".$row['time']."</div></div>";
                }
            ?>		
		</div>
		<div class="mainList">
			<div class="list" id="listtime">
				<div class="indexTitle">精选文章</div>
				<ul>
					 <?php 
						$counter=0;
						$sql    =   "SELECT * FROM `postgraduate` where `favorite` = '1' order by id desc";
                    	$result    =   $mysql->getData($sql);
                        foreach ($result as $row){
                            echo "<li class='titleList'><a href='page.php?table=postgraduate&id=".$row['id']."'>".$row['title']."</a></li>";
                            $counter+=1;
                            if($counter==10){
                                break;
                            }
                        }
                    ?>
				</ul>
			</div>
			<!-- <div class="list" id="listtag">
				<div class="indexTitle">标题</div>
				<div class="tags">c#</div>
				<div class="tags">java</div>
				<div class="tags">科学前沿</div>
				<div class="tags">计算机视觉</div>
				<div class="tags">ios应用开发简介</div><div class="tags">c#</div>
				<div class="tags">java</div>
				<div class="tags">科学前沿</div>
				<div class="tags">计算机视觉</div>
				<div class="tags">java</div>
				<div class="tags">科学前沿</div>
				<div class="tags">计算机视觉</div>
				<div class="tags">java</div>
				<div class="tags">科学前沿</div>
				<div class="tags">计算机视觉</div>
			</div>-->
		</div>
	</div>

<script type="text/javascript" src="js/reseach.js"></script>
</body>
</html>
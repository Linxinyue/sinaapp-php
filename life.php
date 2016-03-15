<!DOCTYPE html>
<html>
<head>
	<title>生活琐记</title>
	<link rel="stylesheet" type="text/css" href="style/tech.css">
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta name="theme-color" content="#FFEB3B" >
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
<?php include_once("header.php") ?>
	
	<div class="mainImg" id="mainImg">
		生活琐记
	</div>
	<div class="main" id="main">
		
		<div class="mainPage">
			<?php 
            	$mysql  =   new SaeMysql();
            	$sql    =   "SELECT * FROM `myessay` order by id desc";
            	$result    =   $mysql->getData($sql);
				foreach ($result as $row){
                    echo "<div class='singlePage'><a href='page.php?table=myessay&id=".$row['id']."'><div class='singleTitle' >".$row['title']."</div></a><div class='singleContent'>".$row['abstract']."...</div><div class='singleTime'>".$row['time']."</div></div>";
                }
            ?>		
		</div>
		<div class="mainList">
			<div class="list" id="listtime">
				<div class="indexTitle">精选文章</div>
				<ul>
					 <?php 
						$counter=0;
						$sql    =   "SELECT * FROM `myessay` where `favorite` = '1' order by id desc";
                    	$result    =   $mysql->getData($sql);
                        foreach ($result as $row){
                            echo "<li class='titleList'><a href='page.php?table=myessay&id=".$row['id']."'>".$row['title']."</a></li>";
                            $counter+=1;
                            if($counter==10){
                                break;
                            }
                        }
                    ?>
				</ul>
			</div>
		</div>
	</div>

<script type="text/javascript" src="js/life.js"></script>
</body>
</html>
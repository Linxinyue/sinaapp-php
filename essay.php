<!DOCTYPE html>
<html>
<head>
	<title>文章</title>
	<link rel="stylesheet" type="text/css" href="style/tech.css">
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="theme-color" content="#8BC34A" >
</head>
<body>
<?php include_once("header.php") ?>
	
	<div class="mainImg" id="mainImg">
		文章
	</div>
	<div class="main" id="main">
		<div class="mainPage">
            <?php 
            	$mysql  =   new SaeMysql();
            	$sql    =   "SELECT * FROM `essay` order by id desc";
            	$result    =   $mysql->getData($sql);
				foreach ($result as $row){
                    echo "<div class='singlePage'><a href='page.php?table=essay&id=".$row['id']."'><div class='singleTitle' >".$row['title']."</div></a><div class='singleContent'>".$row['abstrct']."...</div><div class='singleTime'>".$row['mydate']."</div></div>";
                }
            ?>			
		</div>
		<div class="mainList">
			<div class="list" id="listtime">
				<div class="indexTitle">精选文章</div>
				<ul>
                	<?php 
						$counter=0;
						$sql    =   "SELECT * FROM `essay` where `favorite` = '1' order by id desc";
                    	$result    =   $mysql->getData($sql);
                        foreach ($result as $row){
                            echo "<li class='titleList'><a href='page.php?table=essay&id=".$row['id']."'>".$row['title']."</a></li>";
                            $counter+=1;
                            if($counter==10){
                                break;
                            }
                        }
                    ?>
					<li class='titleList'><a href='kown.php'>基督教</a></li>
				</ul>
			</div>
		</div>
	</div>
<script type="text/javascript" src="js/essay.js"></script>
</body>
</html>
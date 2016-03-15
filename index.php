<!DOCTYPE html>
<html>
<head>
    <meta name="baidu-site-verification" content="udu14PzIEf" />
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="theme-color" content="#FFFFFF" >
</head>
<body>
	<?php include_once("header.php") ?>
	<div class="indexMain">
		<div class="indexContent" id="firstContent">
			<div class="indexTitle">最新</div>
			<ul>
                 <?php 
    					$mysql  =   new SaeMysql();
						$counter=0;
						$sql    =   "SELECT * FROM `tech` order by id desc";
                    	$result    =   $mysql->getData($sql);
                        foreach ($result as $row){
                            echo "<li class='titleList'><a href='page.php?table=tech&id=".$row['id']."'>".$row['title']."</a></li>";
                            $counter+=1;
                            if($counter==3){
                                $counter=0;
                                break;
                            }
                        }

						$sql    =   "SELECT * FROM `essay` order by id desc";
                    	$result    =   $mysql->getData($sql);
                        foreach ($result as $row){
                            echo "<li class='titleList'><a href='page.php?table=essay&id=".$row['id']."'>".$row['title']."</a></li>";
                            $counter+=1;
                            if($counter==3){
                                $counter=0;
                                break;
                            }
                        }
						$sql    =   "SELECT * FROM `postgraduate` order by id desc";
						$result    =   $mysql->getData($sql);
                        foreach ($result as $row){
                            echo "<li class='titleList'><a href='page.php?table=postgraduate&id=".$row['id']."'>".$row['title']."</a></li>";
                            $counter+=1;
                            if($counter==2){
                                $counter=0;
                                break;
                            }
                        }
                    ?>
				
			</ul>
		</div>

		<div class="indexContent" id="secondContent">
			<div class="indexTitle">精选</div>
			<ul>
				<?php 
						$counter=0;
						$sql    =   "SELECT * FROM `tech` where `favorite` = '1' order by id desc";
                    	$result    =   $mysql->getData($sql);
                        foreach ($result as $row){
                            echo "<li class='titleList'><a href='page.php?table=tech&id=".$row['id']."'>".$row['title']."</a></li>";
                            $counter+=1;
                            if($counter==3){
                                $counter=0;
                                break;
                            }
                        }

						$sql    =   "SELECT * FROM `essay` where `favorite` = '1' order by id desc";
                    	$result    =   $mysql->getData($sql);
                        foreach ($result as $row){
                            echo "<li class='titleList'><a href='page.php?table=essay&id=".$row['id']."'>".$row['title']."</a></li>";
                            $counter+=1;
                            if($counter==3){
                                $counter=0;
                                break;
                            }
                        }
						$sql    =   "SELECT * FROM `postgraduate` where `favorite` = '1' order by id desc";
						$result    =   $mysql->getData($sql);
                        foreach ($result as $row){
                            echo "<li class='titleList'><a href='page.php?table=postgraduate&id=".$row['id']."'>".$row['title']."</a></li>";
                            $counter+=1;
                            if($counter==2){
                                $counter=0;
                                break;
                            }
                        }
                    ?>
			</ul>
		</div>


		<div class="indexContent" id="three">
			<div class="indexTitle">日期</div>
			<ul>
                <li class="titleList"><a href='search.php?date=2016-02'>2016年02月</a></li>
                <li class="titleList"><a href='search.php?date=2016-01'>2016年01月</a></li>
                <li class="titleList"><a href='search.php?date=2015-12'>2015年12月</a></li>
			</ul>
		</div>

		<!-- <div class="indexContent" id="four">
			<div class="indexTitle">标题</div>
			<ul>
				<li class="titleList">你知道某宝为啥叫万能吗？不说你都不知道吧</li>
				<li class="titleList">盘点2015年的10款优质智能家居产品</li>
				<li class="titleList">你知道某宝为啥叫万能吗？不说你都不知道吧</li>
				<li class="titleList">盘点2015年的10款优质智能家居产品</li>
				<li class="titleList">你知道某宝为啥叫万能吗？不说你都不知道吧</li>
				<li class="titleList">盘点2015年的10款优质智能家居产品</li>
				<li class="titleList">你知道某宝为啥叫万能吗？不说你都不知道吧</li>
				<li class="titleList">盘点2015年的10款优质智能家居产品</li>
			</ul>
		</div>-->
	</div>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>
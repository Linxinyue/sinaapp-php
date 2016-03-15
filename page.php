<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="style/page.css">
    <title><?php 
    	if(isset($_GET['table'])&&isset($_GET['id'])){
			$mysql  =   new SaeMysql(); 
            $id=$_GET['id'];
            $sql = "SELECT * FROM `".$_GET['table']."` WHERE `id`=".$_GET['id'];
            $result    =   $mysql->getLine($sql);
            echo $result['title'];
        }else{
            echo "</title><script>location.href='http://3.sangzhenya.sinaapp.com/index.php'</script><title>";
        }
    ?></title>
</head>
<body>
	<div class="webSiteMainPage">
		<div class="webSitePageTitle">
			<?php echo $result['title']  ?>
		</div>
		<div class="webSitePageContent">
			<?php echo $result['content'] ?>
		</div>
		<div class="webSitePrePage"> 
        	<?php 
                if(isset($_GET['table'])&&isset($_GET['id'])){
                    $sql = "SELECT * FROM `".$_GET['table']."`";
                    $result    =   $mysql->getData($sql);
                    $id=$_GET['id'];
                    if($id < count($result)){
                        $id = $_GET['id'] + 1;
                        $sql = "SELECT * FROM `".$_GET['table']."` WHERE `id`=".$id;
                        $result    =   $mysql->getLine($sql);
                        echo  "上一篇：<a href='page.php?table=".$_GET['table']."&id=".$id."'>".$result['title']."</a>";
                    }
                }
				
            ?>
        </div>
		<div class="webSiteNextPage"> 
        	<?php 
                if(isset($_GET['table'])&&isset($_GET['id'])){
        			$id=$_GET['id'];
                    if($id != 1){
                            $id = $_GET['id'] -1;
                            $sql = "SELECT * FROM `".$_GET['table']."` WHERE `id`=".$id;
                            $result    =   $mysql->getLine($sql);
                            echo  "下一篇：<a href='page.php?table=".$_GET['table']."&id=".$id."'>".$result['title']."</a>";
                        }
                }
            	
            ?>
        </div>
		<div class="webSiteOptions">
            <?php 
            		  if(isset($_GET['table'])&&isset($_GET['id'])){
                      		if($_GET['table']=='essay'){
                                echo "<a href='./essay.php' ><div class='webSiteOption' id='webSiteOptionBack'>返回</div></a>";
                            }elseif($_GET['table']=='myessay'){
                            	echo "<a href='./life.php' ><div class='webSiteOption' id='webSiteOptionBack'>返回</div></a>";
                            }elseif($_GET['table']=='postgraduate'){
                            	echo "<a href='./research.php' ><div class='webSiteOption' id='webSiteOptionBack'>返回</div></a>";
                            }elseif($_GET['table']=='tech'){
                            	echo "<a href='./tech.php' ><div class='webSiteOption' id='webSiteOptionBack'>返回</div></a>";
                            }elseif($_GET['table']=='question'){
                            	echo "<a href='.s/kown.php' ><div class='webSiteOption' id='webSiteOptionBack'>返回</div></a>";
                            }
                      }
            ?>
            <a href='./index.php'><div class="webSiteOption">首页</div></a>
		</div>
	</div>
</body>
</html>
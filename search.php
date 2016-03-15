<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="style/tech.css">
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/search.css"> 
    <?php 
		$mysql  =   new SaeMysql(); 
		$type = '';
    	if(isset($_GET['table'])&&isset($_GET['tag'])){
			$type='tag';
        }elseif(isset($_GET['date'])){
            $type='date';
            echo "<title>".$_GET['date']."</title>";            
        }else{
        	echo "</title><script>location.href='http://3.sangzhenya.sinaapp.com/index.php'</script><title>";
        }
    ?>
</head>
<body>
<?php include_once("header.php") ?>
	
	<div class="main" id="main" >
		
		<div class="mainSearchPage" >
            <?php 
        		if($type == "date"){
    				$sql    =   "SELECT * FROM `tech` where `time` like '%".$_GET['date']."%' order by id desc";
                    $result    =   $mysql->getData($sql);
        			if(count($result)>0){
                    	 foreach ($result as $row){
                     	   echo "<div class='singlePage'><a href='page.php?table=tech&id=".$row['id']."'><div class='singleTitle' >".$row['title']."</div></a><div class='singleContent'>".$row['abstract']."...</div><div class='singleTime'>".$row['time']."</div></div>";
                   		 }
                    }
        			
        			$sql    =   "SELECT * FROM `essay` where `mydate` like '%".$_GET['date']."%' order by id desc";
                    $result    =   $mysql->getData($sql);
        			if(count($result)>0){
                    	 foreach ($result as $row){
                     	   echo "<div class='singlePage'><a href='page.php?table=essay&id=".$row['id']."'><div class='singleTitle' >".$row['title']."</div></a><div class='singleContent'>".$row['abstrct']."...</div><div class='singleTime'>".$row['mydate']."</div></div>";
                   		 }
                    }
        
      				$sql    =   "SELECT * FROM `postgraduate` where `time` like '%".$_GET['date']."%' order by id desc";
                    $result    =   $mysql->getData($sql);
        			if(count($result)>0){
                    	 foreach ($result as $row){
                     	   echo "<div class='singlePage'><a href='page.php?table=postgraduate&id=".$row['id']."'><div class='singleTitle' >".$row['title']."</div></a><div class='singleContent'>".$row['abstract']."...</div><div class='singleTime'>".$row['time']."</div></div>";
                   		 }
                    }
        			
                   
    			}else if($type == "tag"){
    
    			}
            ?>	
			
		</div>
		
	</div>

<script type="text/javascript" src="js/search.js"></script>
</body>
</html>
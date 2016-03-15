<!DOCTYPE html>
<html>
<head>
	<title>共享文字</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/mid.css">
    <link rel="stylesheet" type="text/css" href="style/share.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <?php 
		$mysql  =   new SaeMysql();
    	if(isset($_POST['wd'])&&$_POST['wd']!=""){
            $getID="SELECT *  FROM `share`  order by id desc limit 1";
            $ID=$mysql->getLine($getID);
            $nextID=$ID['id']+1;
            $content = $_POST['wd'];
            $content = str_replace('<','&lt;',$content);
            $content = str_replace('>','&gt;',$content);
            $content = str_replace('"','&quot;',$content);
            $content = str_replace("'","&#39;",$content);
            $content = str_replace("\\","\\\\",$content);
            //echo $content;
            $time = date('y-m-d H:i:s',time());
			$insertSql = "INSERT INTO `app_sangzhenya`.`share` (`id`, `content`, `time`) VALUES ('".$nextID."', '".$content."', '".$time."');";            
            $insertResult = $mysql->runSql($insertSql);
            /*if($insertResult){
            	echo "right";
            }else{
                echo "error:".$insertResult;
            }*/
        }//$sql = "DELETE FROM `share` WHERE `id` = 1";
		if(isset($_POST['delete'])&&$_POST['delete']!=""){
            $delsql = "DELETE FROM `share` WHERE `id` = ".$_POST['delete'];        
            $delResult = $mysql->runSql($delsql);
        }
    ?>
</head>
<body>
    <div class="searchPart">
        <form method="post">
          <input class="searchInput" type="text" name="wd"   placeholder="please input the word you want to recoder here" />
        </form>
    </div>
    <div class="mainShare">
        <?php 
				$isAll=false;
				if(isset($_GET['all'])){
                    $isAll=true;
                 }
				$edit = '';
                if(isset($_GET['edit'])){
                    $edit= 'delete';
                 }
 				if($isAll){
                    $sql    =   "SELECT * FROM `share` order by time desc";
                }else{
                	$sql    =   "SELECT * FROM `share` order by time desc limit 10";
                }
                
                $result    =   $mysql->getData($sql);
				$counter = 0;
                if(count($result)!=0){
                	foreach ($result as $row){
                        $content = $row['content'];
                        if(substr($content,0,8)=='https://'||substr($content,0,7)=='http://'){
                            echo "<div class='single'><div class='timePart'><div class='time'>".substr($row['time'],11,5)."</div><div class='date'>".substr($row['time'],0,10)."</div></div><div class='copyContent' ><a href='".$content."'>".$content."</a></div><div class='delete' id='delete'><form method='post'><input class='hiddenInput' type='text' name='delete' value='".$row['id']."' /><input class='submitOption' type='submit' value='".$edit."' /></form></div></div>";
                        }else{
                            echo "<div class='single'><div class='timePart'><div class='time'>".substr($row['time'],11,5)."</div><div class='date'>".substr($row['time'],0,10)."</div></div><div class='copyContent' >".$content."</div><div class='delete' id='delete'><form method='post'><input class='hiddenInput' type='text' name='delete' value='".$row['id']."' /><input class='submitOption' type='submit' value='".$edit."' /></form> </div></div>";
                        }
                        $counter += 1;
                        
                        if($counter == 10&&!$isAll){
                            break;
                        }
                    }
                }        
        ?>
	</div>

    <div class="options" style="top:75%;">
        <a href="index.php"><div class="hideOption">首页</div></a>
		</div>
</body>
</html>

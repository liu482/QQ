 <?php
 
 //读取点赞ip
$file_path= "zanip.dat";
if(file_exists($file_path)){
$fp= fopen($file_path,"r");
$str= fread($fp,filesize($file_path));//指定读取大小，这里把整个文件内容读取出来
$ipz= str_replace("\r\n","<br />",$str);

}


$ip = $_SERVER["REMOTE_ADDR"];//获取ip


if (strstr($ipz,$ip)) {
    echo '<script language="JavaScript">;alert("每天只可以点赞一次哦~");location.href="../index.php";</script>;';
} else {
    //不含有则可以点赞  先写入ip
    $filename = 'zanip.dat';
    $word ="\r\n".$ip;
    $fh = fopen($filename, "a");
    fwrite($fh, $word);
    fclose($fh);
    
    //增加点赞
     //读取当前点数量
   $file_path= "zan.dat";
if(file_exists($file_path)){
$fp= fopen($file_path,"r");
$str= fread($fp,filesize($file_path));//指定读取大小，这里把整个文件内容读取出来
$zan = str_replace("\r\n","<br />",$str);
  }
 $zan=$zan+1;
  
  
  //写入新增赞
  $filename = 'zan.dat';
$word = $zan;
$fh = fopen($filename, "w");
fwrite($fh, $word);
fclose($fh);

  
    
    echo '<script language="JavaScript">;alert("点赞成功啦~");location.href="../index.php";</script>;';
    
}



 ?>
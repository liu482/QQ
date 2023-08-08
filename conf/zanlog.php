<?php


//获取今天的日期
$Y="Y";//获取年
         $m="m";//获取月
         $d="d";//获取天
         $H="H";//获取时
         $i="i";//获取分
         $s="s";//获取秒
    //判断月数
    $sj=date($Y.$m.$d);//获取月数
    //echo $sj;


//获取日志的旧日期
$file_path= "./conf/zanlog.dat";
if(file_exists($file_path)){
$fp= fopen($file_path,"r");
$str= fread($fp,filesize($file_path));//指定读取大小，这里把整个文件内容读取出来
$sjlog = str_replace("\r\n","<br />",$str);
}

if ($sjlog==$sj) {
    //当天还没过 不执行清理点赞ip
} else {
    //新的一天 清理掉昨天的点赞ip
      //写入新一天的时间
  $filename = './conf/zanlog.dat';
$word = $sj;
$fh = fopen($filename, "w");
fwrite($fh, $word);
fclose($fh);

//清理掉昨天的点赞ip
  $filename = './conf/zanip.dat';
$word = '127.0.0.0';
$fh = fopen($filename, "w");
fwrite($fh, $word);
fclose($fh);

}









?>
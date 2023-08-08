<?php






$url =  "http://api.weboss.hk/qqol/api.php?qq=3187683426";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);    // 要求结果为字符串且输出到屏幕上
curl_setopt($ch, CURLOPT_HEADER, 0); // 不要http header 加快效率
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
$output = curl_exec($ch);
curl_close($ch);
//var_dump($output);

$arr=json_decode($output,true);//转json数据为数组
//print_r($arr);//打印出数组

$zhi=$arr['code'];//取数组里的指定值

if ($zhi==200) {
    //echo '对方QQ当前在线';
    echo '<img src="'.'./asstes/img/zx.png'.'" alt="" title="对方QQ在线">';
} else {
    //echo '对方QQ当前不在线';
    echo '<img src="'.'./asstes/img/zx.png'.'" alt="" title="对方QQ在线">';
}









?>
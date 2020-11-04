<?php
//   var_dump($_SERVER);

//$host = 'http://www.baidu.com:80/index.php?username=goudan';
//$arr = parse_url($host);
//var_dump($arr);


/**
 * 转换成关联数组
 */
//$str = 'username=goudan';
//parse_str($str,$arr) ;
//var_dump($arr);

$arr = ['username' => 'zhangsan','password' => '123456'];
$str = http_build_query($arr);
var_dump($str);
<?php
//demo1
//\s 空白字符
$str = "我喜欢吃苹果";
$p = '/^我[^\s]+(苹果|香蕉)$/';
preg_match($p,$str,$match);
echo $match[0];
echo "<hr/>";
//demo2
//\d0-9之间任意数字
//+一次或多次 ？0或1次 *0次或多次
$str = "我的电话号码是010-12345678,我的电话号码是010-123456789";
$p = "/\d+\-\d+/";
//preg_match_all($p,$str,$match);
preg_match($p,$str,$match);
echo $match[0];
echo "<br/>";
$p2 = "/\d?\-\d?/";
preg_match($p2,$str,$match);
echo  $match[0];
echo "<br/>";
$p3 = "/\d{3}\-\d{8}/";
preg_match($p3,$str,$match);
echo  $match[0];
echo "<hr/>";
//demo3 搜索和替换
//\d数字，字母，下划线
$str = 'April 15, 2014';
$pattern = "/(\w+) (\d+)\, (\d+)/";
$replace = '$3, ${1} $2';
echo preg_replace($pattern,$replace,$str);
echo "<hr/>";
//demo4 匹配邮箱
//\i不区分大小写
$p = "/[a-z0-9]+\w*[\-\_\.]?\w*@[a-z0-9]+\.?(com|cn)$/i";
$str = "我的QQ为947192835@qq.com";
preg_match($p,$str,$match);
echo $match[0];
//^[a-z]([a-z0-9]*[-_]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?$/i;";
//demo5 匹配网址




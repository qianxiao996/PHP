<?php
session_start();
date_default_timezone_set('Asia/Shanghai');
require_once 'common/mysql.php';
/*
 * $mes  错误信息 string
 * $path 跳转路径 string
 * */


function showInfo($mes,$path =null)
{
    if($mes)
    {
        echo "<script>alert('{$mes}')</script>";
        if($path != null)
        echo "<script>window.location.href='{$path}'</script>";
    }
}
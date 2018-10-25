<?php
session_start();
if($_SESSION['user'])
{
    session_destroy();

}

if($_COOKIE['user'])
{
    setcookie('user','',time()-1);
    echo "<script>alert('已成功注销！')</script>";
    echo "<script>window.location.href='login.html'</script>";
}
else
{
    echo "<script>alert('你没有登录，请重新登录！')</script>";
    echo "<script>window.location.href='login.html'</script>";
}

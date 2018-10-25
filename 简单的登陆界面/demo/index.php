<?php
require_once 'common/common.php';
$cookie = $_COOKIE['user'];
$user =substr($cookie,0,-32);

if($user.md5('360') === $cookie)
{
    echo '欢迎 '.$user.' 登录' . '<br>';
    if($_SESSION['user'] == $user && $_SESSION['sec_id'] == 360)
    {
        echo '身份正常!';
    }
    else
    {
        echo '身份异常! ';
        echo '<a href="login.html">请验证身份</a>';
        echo '<br>';

    }
    echo '<a href="logout.php">注销登录</a>';

}
else
{
    echo "<script>alert('你没有权限，请登录！')</script>";
    echo "<script>window.location.href='login.html'</script>";
}

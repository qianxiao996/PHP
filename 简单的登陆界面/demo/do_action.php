<?php
require_once 'common/common.php';


if($_POST['user'] !='' && isset($_POST['passwd']) && isset($_POST['verifyCode']))
{
    $user = $_POST['user'];
    $passwd = md5($_POST['passwd']);
    $verify  = $_POST['verifyCode'];


   if(strtolower($_SESSION["verifyCode"]) == strtolower($verify))
   {
       if(getNumber($link,"select * from user where user='{$user}' and passwd='{$passwd}'"))
        {
            $user_mw = $user.md5('360');

            setcookie('user',$user_mw,time()+3600,'','','',true);
            $_SESSION['user'] = $user;
            $_SESSION['sec_id'] = 360;
            header('Location:index.php');
        }
        else
        {
            showInfo('用户名或密码错误!','login.html');
        }
   }
   else
   {
       showInfo('验证码错误!','login.html');
   }

}
else
{
    showInfo('用户名和密码不能为空!','login.html');
}


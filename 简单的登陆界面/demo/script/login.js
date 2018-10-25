function verify_login()
{


        var user = document.forms['login']['user'].value;
        var passwd = document.forms['login']['passwd'].value;
        var reg = /\W+/i;
         if(reg.test(user))
        {
        alert('非法字符');
        return false;
        }
        if(user.length == 0)
        {
            alert('请输入用户名');
            return false;
        }
        if(user.length > 10)
        {
            alert('输入正确用户名');
            return false;
        }

        return true;

}
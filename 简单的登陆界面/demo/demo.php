<?php

/*for($j = 0; $j < 5;$j++)
{
for($i =0;$i < 10;$i++)
{
    if($i == 5)
        continue;
    echo "i = $i";
    echo '<br>';
}

echo "j = $j";
echo '<br>';
}
*/

/*function showInfo($par,$par2 = 'Flag',$charset ='UTF-8')
{
    //return 'This is your '.$par.' default: '.$par2;


}
$name = 'laowang';
echo showInfo(1,2);*/

/*function add(&$par)
{
    $par = $par + 100;
}
$b = 1;
add($b);
echo $b;*/
$arr = array('name'=>array('laowang','laoli','laojia','laosi'),'age'=>array(18,20,15,30),'Flag');

foreach ($arr as $key =>$value)
{
    if(is_array($value))
    {
        foreach ($value as $value1)
            echo $value1;
    }
    else{
        echo $value;
    }

}



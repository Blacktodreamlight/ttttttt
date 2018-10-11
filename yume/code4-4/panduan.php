
<?php
header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/5
 * Time: 23:12
 */
$cj=$_POST['cj'];
if (is_numeric($cj)&&$cj>=0)
{
    if($cj>=0&&$cj<60) {
        echo '0----60以下，不及格';
    }
    elseif ($cj>=60&&$cj<70)
    {
        echo '60---70及格了，要努力';
    }
    elseif ($cj>=70&&$cj<80)
    {
        echo '70---80  还不错';
    }

    elseif ($cj>=80&&$cj<90)
    {
        echo '80---90   上清华有希望';
    }
    elseif ($cj>=90&&$cj<100)
    {
        echo '90---100   你这辈子没希望了';
    }
    elseif ($cj==100)
    {
        echo '100         更没希望了';
    }
    else
    {
        echo'100分以上    爱因斯坦转世啊，思密达！';
    }
}
else
{
    echo'不是一个数值类型或者小于0  请输入正确的分数。';
}
?>
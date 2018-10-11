<title>99乘法口诀表</title>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/8
 * Time: 0:16
 */
header("content-type:text/html;charset=utf-8");
for ($i=1;$i<10;$i++)
{

    for ($j=1;$j<=$i;$j++)
    {
        echo $i.'x'.$j.'='.($i*$j). '   ';
        //break;
    }

    echo '</br>';
}
?>
<title>while表格换行及颜色显示</title>
<?php
header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/6
 * Time: 23:57
 */
$i=0;
echo '<table width="800" border="1">';
while ($i<100)
{
    if ($i%10==0)
    {
        if ($i%20==0)
        {
            echo '<tr bgcolor="#00bfff">';
        }
        else
        {
            echo '<tr>';
        }
    }
    echo '<td>'.$i.'</td>';
    $i++;
    if ($i%10==0)
    {
        echo '</tr>';
    }

}
echo '</table>';
?>
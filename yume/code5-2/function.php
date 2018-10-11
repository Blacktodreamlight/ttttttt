<title>【重要】funtion表格换行及颜色显示</title>
<?php
header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/6
 * Time: 23:57
 */
function MakeTable($c1,$c2="#7fffd4",$a=10,$b=10)
{
    $html='<table width="800" border="1" align="center">';
    for($i=0;$i<$a;$i++)
    {
        if ($i%2==0)
        {
            $html.= "<tr bgcolor='$c1'>";
        }
        else
        {
            $html.= "<tr bgcolor='$c2'>";
        }
        for ($j = 0; $j < $b; $j++)
        {
            $html .= "<td align='center'>$i$j</td>";
        }
    }
    for($i=0;$i<$a;$i++)
    {
        if ($i % 2 == 0) {
            $html .="</tr>";
        } else {
            $html .= "</tr>";
        }
    }
    return $html;
}
$table = makeTable("00bfff");
echo $table;
?>
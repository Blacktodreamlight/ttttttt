<title>使用foreach遍历三维数组</title>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/27
 * Time: 22:11
 */
header("content-type:text/html;charset=utf-8");
$arr=array(
    '教学部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
                    ),
    '宣传部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
                    ),
    '财务部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
                    ),
);
foreach ($arr as $k1=>$v1)
{
    echo '<h1 align="center">'.$k1.'</h1>';
    foreach ($v1 as $k2=>$v2)
    {
        echo '<table width="600px"  border="1" align="center" >';
        echo '<tr>';
        foreach ($v2 as $k3=>$v3)
        {
            echo '<td width="200px">'.$v3.'</td>';
        }
        echo '</tr>';
        echo '</table>';
    }

}


/*echo '<pre>';
var_dump($arr);
echo '</pre>';

foreach($arr as $ker=>$vase)

{

    echo $ker.'<br/>';

    foreach($vase as $k=>$v)

    {
        foreach($v as $x=>$y)

        {
            echo $y;

            if($x<2)

            {

                echo '----';

            }

        }

        echo '<br/>';

    }

    echo '=================='.'<br/>';

}*/

?>
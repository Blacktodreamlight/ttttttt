<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/13
 * Time: 23:51
 */
header("content-type:text/html;charset=utf-8");
function demo(){
    echo $_POST['hongniu'];
}
demo();
$one = 10;

function demo2(){
    $two = 100;

    $result = $two + $GLOBALS['one'];

    return $result;

}
//你会发现结果变成了110
echo demo2();

$hongniu = '我是一个兵，来自老百姓';

function test(){

    echo '执行了函数test哟<br />';
    //调用test()函数，将通过$GLOBALS['hongniu'],把$hongniu的值改变掉

    $GLOBALS['hongniu'] = '帮助别人很快乐';

}

test();
//发现是不是输出的值变了呀？
echo $hongniu;

function hello(){

    $GLOBALS['que'] = '提神喝茶更好哟';

    echo '你调了一下函数hello<br />';
}

hello();

echo $que;

$a = 10;
$b = 100;
function test2(){
    global $a , $b;
    echo $a + $b;
}
//结果是不是显示出来了？
test2();
?>
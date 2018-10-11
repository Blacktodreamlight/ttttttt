<form>
    <input type="text" name="num1">

    <select name="fh">
        <option value="jia"> + </option>
        <option value="jian"> - </option>
        <option value="c"> x </option>
        <option value="chu"> / </option>
        <option value="qy"> % </option>

    </select>

    <input type="text" name="num2">

    <input type="submit" value="运算" />

</form>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/4
 * Time: 20:54
 */
header("content-type:text/html;charset=utf-8");
@$num1 = $_GET['num1'];//@在出现notice代码之前加上@，@表示这行有错误或是警告不要输出.
@$num2 = $_GET['num2'];
@$fh = $_GET['fh'];

if(is_numeric($num1) || is_numeric($num2)){
    if($fh == 'jia'){
        echo $num1 . '+' . $num2 . '=' . ($num1+$num2);
    }

    if($fh=='jian'){
        echo $num1 . '-' . $num2 . '=' . ($num1-$num2);
    }

    if($fh=='c'){
        echo $num1 . 'x' . $num2 . '=' . ($num1*$num2);
    }
    if($fh=='chu'){
        echo $num1 . '/' . $num2 . '=' . ($num1/$num2);
    }
    if($fh=='qy'){
        echo $num1 . '%' . $num2 . '=' . ($num1%$num2);
    }


}
else
{
    echo '请输入数值类型';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>判断平年和闰年</title>
</head>
<body>
<form method="post">
    <input type="text" name="num1">

    <input type="submit" value="判断平年和闰年" />

</form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/4
 * Time: 21:13
 */
header("content-type:text/html;charset=utf-8");
@$num1=$_POST['num1'];
if (is_numeric($num1)){
    if ($num1%4==0&&$num1%100!==0)
    {
        echo $num1.'年是闰年';
    }
    else
    {
        echo $num1.'年是平年';
    }
}
else
{
    echo '请输入数值类型';
}
?>
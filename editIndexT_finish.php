<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_connect.php");

$author = $_POST['author'];
$title = $_POST['title'];
$publisher = $_POST['publisher'];
$email = $_POST['email'];
$phone = $_POST['phone'];

//紅色字體為判斷密碼是否填寫正確
if($_SESSION['account'] != null && $pw != null && $pw2 != null)
{
    $id = $_SESSION['account'];

    //更新資料庫資料語法
    $sql = "update profile set author=$pw, title=$title, publisher=$publisher, email=$email , phone=$phone where author='$author'";
    if(mysql_iquery($link,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=editIndexT.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=editIndexT.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=editIndexT.php>';
}
?>
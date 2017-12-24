<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_connect.php");

$id = $_POST['id'];
$pw = sha1($_POST['pw']);
$pw2 = sha1($_POST['pw2']);
$email = $_POST['email'];
$phone = $_POST['phone'];
$type = $_POST['type'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
    //新增資料進資料庫語法
    $sql = "insert into userList (username, password, email, phone, userType) values ('$id', '$pw', '$email', '$phone', '$type')";
    if(mysqli_query($link,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
    }
    else
    {
        echo '新增失敗!!請注意帳密是否正確!!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
    }
}
else
{
    echo '新增失敗!!請注意帳密是否正確!!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
}
?>
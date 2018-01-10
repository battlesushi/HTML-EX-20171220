<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_connect.php");
$id = $_POST['id'];
$content = $_POST['content'];

if($_SESSION['account'] != null)
{
    //新增資料進資料庫語法
    $sql = "update awards set content='$content' WHERE id='$id'";
    if(mysqli_query($link,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=awards.php>';
    }
    else
    {
        echo '修改失敗!!請注意輸入(編號:xx)是否正確!!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=awardsEdit.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=awards.php>';
}
?>
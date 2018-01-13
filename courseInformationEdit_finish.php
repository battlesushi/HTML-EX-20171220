<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_connect.php");
$id = $_POST['id'];
$content = $_POST['content'];

if($_SESSION['account'] != null)
{
    //新增資料進資料庫語法
    $sql = "update courseInformation set content='$content' WHERE id='$id'";
    if(mysqli_query($link,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=courseInformation.php>';
    }
    else
    {
        echo '修改失敗!!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=courseInformationEdit.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=courseInformation.php>';
}
?>
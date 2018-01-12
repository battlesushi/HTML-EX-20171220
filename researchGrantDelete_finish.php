<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_connect.php");
$id = $_POST['id'];
if($_SESSION['account'] != null)
{
    //新增資料進資料庫語法
    $sql = "delete from researchGrant where id='$id'";
    if(mysqli_query($link,$sql))
    {
        echo '刪除成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=researchGrant.php>';
    }
    else
    {
        echo '刪除失敗!!請注意輸入(編號:xx)是否正確!!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=researchGrant.php>';
    }
}
else{
    echo '您無權限觀看此頁面!(即將返回頁面)';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=researchGrant.php>';
}
?>
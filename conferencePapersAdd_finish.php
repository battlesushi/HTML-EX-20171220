<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_connect.php");

$content = $_POST['content'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($_SESSION['account'] != null)
{
    //新增資料進資料庫語法
    $sql = "insert into conferencePapers (content) values ('$content')";
    if(mysqli_query($link,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=conferencePapers.php>';
    }
    else
    {
        echo '新增失敗!!請注意是否正確!!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=conferencePapersAdd.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=conferencePapers.php>';
}
?>
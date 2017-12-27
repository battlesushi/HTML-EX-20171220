<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("db_connect.php");
$id = $_POST['account'];
$pw = sha1($_POST['pwd']);

//搜尋資料庫資料
$sql = "SELECT * FROM userList where username = '$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);
$email=$row[3];
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $sql = "insert into log (email, event_type, description) values ('$email','login','user login success from".get_client_ip()."')";
        $link->query($sql);
        $_SESSION['account'] = $id;
        echo '登入成功!';
//        require_once('mailTest.php');//<--有人登入之後 寄信管理者信箱
        echo '<meta http-equiv=REFRESH CONTENT=1;url=admindex.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.html>';
}
?>
<?php
// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

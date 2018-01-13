<?php
session_start();
include("fun.inc.php");
include("db_connect.php");
if ($_SESSION['account'] != null) {
    $sql = "SELECT * FROM profile where id=2";
    $result = mysqli_query($link,$sql);
    $row = @mysqli_fetch_row($result);
    $author=$row[1];
    $title=$row[2];
    $publisher=$row[3];
    $email=$row[7];
    $phone=$row[8];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>莊政宏</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php head() ?>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 500px;
        }

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
    <script>
        function reSet() {
            document.getElementById("form").reset();
        }
    </script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php user() ?>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php navbar(0) ?>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-12 text-left">
            <span style="color: #ffffff; font-size: 1.5em; background-color: black">編輯個人資料</span>
            <form id="form" method="post" action="editIndexT_finish.php">
                <b>
                        <span style="color: #ffffff; font-size: 1.5em; background-color: black">
                        姓名：</span>&nbsp;<input type="text" name="author" value="<?php echo $author ?>"/> <br>
                    <span style="color: #ffffff; font-size: 1.5em; background-color: black"><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
                        職稱：</span>&nbsp;<input type="text" name="title" value="<?php echo $title ?>"/> <br>
                    <hr>
                    <span style="color: #ffffff; font-size: 1.5em; background-color: black"><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
                        居住地</span>&nbsp;<input type="text" name="publisher" value="<?php echo $publisher ?>"/> <br>
                    <hr>
                    <span style="color: #ffffff; font-size: 1.5em; background-color: black"><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
                        E-mail：</span><input type="text" name="email" value="<?php echo $email ?>"/> <br>
                    <span style="color: #ffffff; font-size: 1.5em; background-color: black"><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
                        Phone：</span>&nbsp;<input type="text" name="phone" value="<?php echo $phone ?>"/> <br>
                    <hr>
                </b>
                <b style="color: #ffffff;font-size: 1.5em"><input type="submit" name="button" value="更新/Update" onclick="return confirm('確定修改?')" style="background-color: black"/></b>
                <br>
                <br>
                <b style="color: #ffffff;font-size: 1.5em"><input type="button" onclick="reSet()" value="全部重置"style="background-color: black"/></b>
            </form>
        </div>
    </div>
</div>
<?php footer() ?>

</body>
</html>

    <?php
} else {
    echo "您無權限觀看此頁面!";
    echo '<br>';
    echo "ㄏㄡˊ 抓到";
    echo '<br>';
    echo "你想做什麼";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=indexT.php>';
}
?>
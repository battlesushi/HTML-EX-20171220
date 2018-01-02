<?php
include("fun.inc.php");
session_start();
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
            <a class="navbar-brand" href="#">莊政宏</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php navbar(1) ?>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content" style="background-image: url('images/BokudakegaInaiMachi.jpg'); background-size: 100% 100%">
        <div class="col-sm-12 text-left">
            <!--                <h2 class="w3-text-grey w3-padding-16"><i-->
            <!--                            class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>經歷</h2>-->
            <!--                <div class="w3-container">-->
            <!--                    <h4 class="w3-opacity"><b>副教授</b></h4>-->
            <!--                    <h5 class="w3-opacity"><a href="http://csie.asia.edu.tw/"><b>資訊工程學系</b></a></h5>-->
            <!--                    <h5 class="w3-opacity"><a href="http://www.asia.edu.tw/"><b>亞洲大學</b></a></h5>-->
            <!--                    <h5 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span-->
            <!--                                style="color: #48af7c">2013年8月</span> - <span-->
            <!--                                style="background-color: #009688;border-radius: 4px; color: #ffffff;">當前</span></h5>-->
            <!--                    <hr>-->
            <!--                </div>-->
            <form id="form" method="post" action="register_finish.php">
                <b>
                        <span style="color: #ffffff; font-size: 1.5em; background-color: black">
                        帳號：</span>&nbsp;<input type="text" name="id"/> <br>
                    <span style="color: #ffffff; font-size: 1.5em; background-color: black">
                        密碼：</span>&nbsp;<input type="password" name="pw"/> <br>
                    <hr>
                    <span style="color: #ffffff; font-size: 1.5em; background-color: black">
                        再一次輸入密碼：</span>&nbsp;<input type="password" name="pw2"/> <br>
                    <hr>
                    <span style="color: #ffffff; font-size: 1.5em; background-color: black">
                        E-mail：</span><input type="text" name="email"/> <br>
                    <span style="color: #ffffff; font-size: 1.5em; background-color: black">
                        Phone：</span>&nbsp;<input type="text" name="phone"/> <br>
                    <span style="color: #ffffff; font-size: 1.5em; background-color: black">
                        Type：</span> &nbsp;&nbsp;<input type="text" name="type"/> <br>
                    <hr>
                </b>
                <b style="color: #ffffff;font-size: 1.5em"><input type="submit" name="button" value="新增使用者"style="background-color: black"/></b>
                <br>
                <br>
                <b style="color: #ffffff;font-size: 1.5em"><input type="button" onclick="reSet()" value="清空"style="background-color: black"/></b>
            </form>
        </div>
    </div>
</div><?php footer() ?>

</body>
</html>

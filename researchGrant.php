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
            height: auto;
            background-color: burlywood;
            font-weight: bold;
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
    <style>
        .entry {
            padding: 0px 0px 20px;
            text-align: justify;
            font-size: 20px;
            color: #000;
        }
        /*for Table*/
        .tb_main {
            border-collapse: collapse;
            border: 2px solid #996;
            font: normal 80%/140% verdana, arial, helvetica, sans-serif;
            color: #222222;
            background: #fffff0;
        }
        .tb_main caption {
            padding: 0 .4em .4em;
            text-align: left;
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
            color: #333;
            background: transparent;
        }
        .tb_main td, th {
            border-left: 1px solid #cc9;
            border-bottom: 1px solid #cc9;
            padding: .3em;
        }
        .tb_main thead th, tfoot th {
            border: 1px solid #cc9;
            text-align: left;
            font-size: 1em;
            font-weight: bold;
            color: #444;
            background: #dbd9c0;
        }
        .tb_main td a {
            background: transparent;
            color: #222222;
            text-decoration: none;
            border-bottom: 1px dotted #cc9;
        }
        .tb_main td a:hover {
            background: transparent;
            color: #666;
            border-bottom: 1px dotted #72724c;
        }
        .tb_main th a {
            background: transparent;
            color: #72724c;
            text-decoration: none;
            font-weight:bold;
            border-bottom: 1px dotted #cc9;
        }
        .tb_main th a:hover {
            background: transparent;
            color: #666;
            border-bottom: 1px dotted #72724c;
        }
        .tb_main th, tbody td {
            vertical-align: top;
            text-align: left;
        }
        .tb_main tfoot td {
            border: 1px solid #996;
        }
        .tb_main .odd {
            color: #222222;
            background: #f7f5dc;
        }
        .tb_main tr:hover {
            color: #333;
            background: #fff;
        }
        .tb_main tr:hover th,
        .tb_main tr.odd:hover th {
            color: #333;
            background: #ddd59b;
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
            <?php user() ?>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php navbar(5) ?>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-6 text-left">
            <div class="entry">
                <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                    <tbody><tr class="odd">
                        <td width="5%">1</td>
                        <td>整合型(召集人、總主持人)，MOST103-2221-E-468-008-MY2，莊政宏(Cheng-Hung Chuang),陳彥霖、周永振(YUNG-CHEN CHOU)，國科會，利用電腦視覺技術於精神病患者輔助醫療照護－子計畫四：多場景下患者的活動路徑分析(2/2)，2015.8.1 ~ 2016.7.31</td>
                    </tr>
                    <tr>
                        <td width="5%">2</td>
                        <td>整合型(召集人、總主持人)，MOST103-2221-E-468-008-MY2，莊政宏(Cheng-Hung Chuang),陳彥霖、周永振(YUNG-CHEN CHOU)，國科會，利用電腦視覺技術於精神病患者輔助醫療照護－子計畫四：多場景下患者的活動路徑分析(1/2)，2014.8.1 ~ 2015.7.31</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">3</td>
                        <td>整合型(召集人、總主持人)，NSC102-2221-E-468-015，莊政宏(Cheng-Hung Chuang),陳彥霖(Yen-Lin Chen)，國科會，「第一人稱視覺」應用於智慧型居家照護環境的建構-子計畫三：具有資訊隱藏及視訊加密功能之人本視訊分析技術，2013.8.1 ~ 2014.10.31</td>
                    </tr>
                    <tr>
                        <td width="5%">4</td>
                        <td>個別型，NSC101-2221-E-468-015，莊政宏(Cheng-Hung Chuang),陳彥霖(Yen-Lin Chen)、洪振偉(Zeng-Wei Hong)，國科會，基於人本視訊監控及分析之智慧家庭系統之研究，2012.8.1 ~ 2013.10.31</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">5</td>
                        <td>個別型，NSC100-2221-E-468-024，莊政宏(Cheng-Hung Chuang),陳彥霖(Yen-Lin Chen)、洪振偉(Zeng-Wei Hong)，國科會，智慧型內容感知視訊調整系統之研究，2011.8.1 ~ 2012.10.31</td>
                    </tr>
                    <tr>
                        <td width="5%">6</td>
                        <td>個別型，NSC99-2221-E-468-022，莊政宏(Cheng-Hung Chuang)，國科會，具內容保護之可調式多層次視訊編輯技術與應用之研究－具多層次內容感知視訊調整技術之研究，2010.8.1 ~ 2011.10.31</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">7</td>
                        <td>個別型，NSC97-2221-E-468-006，莊政宏(Cheng-Hung Chuang)，國科會，植基於適應性資訊隱藏技術之光學彩色影像及視訊加解密系統之研究，2008.8.1 ~ 2009.10.31</td>
                    </tr>
                    <tr>
                        <td width="5%">8</td>
                        <td>個別型，NSC96-2218-E-468-003，莊政宏(Cheng-Hung Chuang),林國祥(Guo-Shiang Lin)，國科會，以適應性資訊隱藏技術為基礎的光學影像加解密系統之研究，2007.8.1 ~ 2008.7.31</td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
    </div>
</div>

<?php footer() ?>
</body>
</html>

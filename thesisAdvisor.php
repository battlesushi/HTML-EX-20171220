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
            <?php navbar(8) ?>
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
                        <td>1052：羅政勤<br>建康產業的資訊與資源配置模式之研究<br>A Study of Informatics and Resource Allocation modeling on Health Industry</td>
                    </tr>
                    <tr>
                        <td width="5%">2</td>
                        <td>1052：Tanase  Cucliciu<br>Joint HOG-LBP Features for Medical Image Detection Based on Deformable Part Model<br>Joint HOG-LBP Features for Medical Image Detection Based on Deformable Part Model</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">3</td>
                        <td>1042：蔡松賢<br>基於內容顯著和區域分割的影像縮放之研究<br>A Study on Image Retargeting based on Content Saliency and Region Segmentation</td>
                    </tr>
                    <tr>
                        <td width="5%">4</td>
                        <td>1042：陳勁舟<br>基於紋理和顏色特徵的影像檢索之研究<br>A Study on Image Retrieval based on Texture and  Color Features</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">5</td>
                        <td>1042：曾怡菁<br>影像辨識應用於鑒別天然枸杞之研究<br>A Study o Application of Image Recognition in Natural Wolf berry Idetification</td>
                    </tr>
                    <tr>
                        <td width="5%">6</td>
                        <td>1032：陳皇志<br>基於投影法之內容感知影片時空縮放研究<br>Projection Profile-based Content Aware Spatio-temporal Video Retargeting</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">7</td>
                        <td>1032：林棋瀚<br>基於消失點及物件分類之單張戶外影像深度估測<br>Depth Estimation and Object Classification for Single-view Outdoor Images</td>
                    </tr>

                    </tbody></table>
            </div>
        </div>
        <div class="col-sm-6 text-left">
            <div class="entry">
                <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                    <tbody> <tr>
                        <td width="5%">8</td>
                        <td>1032：李彥甫<br>應用消失點及地平線於2D影像深度估測<br>Depth Estimation for 2D Images Using Vanishing Point and Horizon Line</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">9</td>
                        <td>1012：連振佑<br>基於暗原色先驗及色彩分割之單張戶外影像深度估測<br>Single Outdoor Image Depth Estimation Based on Dark Channel Prior and Color Segementation</td>
                    </tr>
                    <tr>
                        <td width="5%">10</td>
                        <td>1002：鄭欽偉<br>具抵抗RST破壞之可逆式三圍婆型資訊隱藏技術<br>RST-Resistant Reversible Data Hiding for -D models</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">11</td>
                        <td>1002：施仲彥<br>具目標保護之內容感知圖像縮放技術研究<br>Target-preserving Conten Aware Image Resizing</td>
                    </tr>
                    <tr>
                        <td width="5%">12</td>
                        <td>0992：李旨平<br>基於側面投影法之內容感知圖像與影片縮放研究<br>Projection Profile-based Content Aware Image and Video Retargeting</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">13</td>
                        <td>0982：江川彥<br>以軟體元件為基礎的嵌入式夜間駕駛視覺輔助系統<br>The Study of the Embedded Nighttime Driver Assistance System based on Software Component Technology</td>
                    </tr>
                    <tr>
                        <td width="5%">14</td>
                        <td>0981：曾信淳<br>基於適應性資訊隱藏技術之光學彩色影像加解密系統研究<br>A study on adaptive steganoggraphy-based optical color image cryptosystem</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">15</td>
                        <td>0972：趙員磊<br>基於主動性輪廓模型及色彩資訊分類之視訊物體追蹤<br>Video object Tracking Based on Active Contour Model and Color Information Classification</td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
    </div>
</div>

<?php footer() ?>
</body>
</html>

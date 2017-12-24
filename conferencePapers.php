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
            <a class="navbar-brand" href="#">莊政宏</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php navbar(4) ?>
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
                        <td>素食食材、營養與健康－以台灣食品營養成分資料庫為例<br>2017休閒餐旅觀光教育全國學術研討會<br>中華民國/台灣/新北市，2017.4.27 ~ 2017.4.28<br>陳瑞奇、莊政宏</td>
                    </tr>
                    <tr>
                        <td width="5%">2</td>
                        <td>Texture Image Retrieval by Using Texture and Color Features<br>The 29th IPPR Conference on Computer Vision, Graphics, and Image Processing<br>Keelung, Taiwan，2016.8.15 ~ 2016.8.17<br>莊政宏、陳勁舟、沈偉誌</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">3</td>
                        <td>Image Resizing based on Content Saliency and Region Segmentation<br>The 29th IPPR Conference on Computer Vision, Graphics, and Image Processing<br>Keelung, Taiwan，2016.8.15 ~ 2016.8.17<br>莊政宏、蔡松賢</td>
                    </tr>
                    <tr>
                        <td width="5%">4</td>
                        <td>The 29th IPPR Conference on Computer Vision, Graphics, and Image Processing<br>Keelung, Taiwan，2016.8.15 ~ 2016.8.17</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">5</td>
                        <td>A Decision Tree Model for Nurses Job Retention with C 4.5 Algorithm and Weka<br>The 28th Annual Conference of Biomedical Fuzzy System Association<br>Kumamoto, Japan，2015.11.21 ~ 2015.11.22<br>羅政勤、、、莊政宏</td>
                    </tr>
                    <tr>
                        <td width="5%">6</td>
                        <td>The 28th Annual Conference of Biomedical Fuzzy System Association<br>Kumamoto, Japan，2015.11.21 ~ 2015.11.22</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">7</td>
                        <td>Projection Profile-Based Content Aware Video Retargeting<br>The 28th IPPR Conference on Computer Vision, Graphics, and Image Processing<br>Jiaoxi, Ilan, Taiwan，2015.8.17 ~ 2015.8.19<br>莊政宏、陳皇志</td>
                    </tr>
                    <tr>
                        <td width="5%">8</td>
                        <td>A Patient-Driven Mobile Medical Information System Applying to Physician Clinical Care<br>2015 9th International Conference on Innovative Mobile and Internet Services in Ubiquitous Computing<br>Blumenau, Santa Catarina, Brazil，2015.7.8 ~ 2015.7.10<br>羅政勤、、莊政宏、陳興忠</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">9</td>
                        <td>A Mobile Nursing App Applying to the Wound Care and Drug Administration of Patients<br>2015 9th International Conference on Innovative Mobile and Internet Services in Ubiquitous Computing<br>Blumenau, Santa Catarina, Brazil，2015.7.8 ~ 2015.7.10<br>羅政勤、、莊政宏、陳興忠</td>
                    </tr>
                    <tr>
                        <td width="5%">10</td>
                        <td>應用消失點及地平線於2D影像深度估測<br>2015數位科技與創新管理研討會<br>台北石碇華梵大學，2015.6.27 ~ 2015.6.27<br>莊政宏、李彥甫</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">11</td>
                        <td>基於消失點及物件分類之單張戶外影像深度估測<br>2015數位科技與創新管理研討會<br>台北石碇華梵大學，2015.6.27 ~ 2015.6.27<br>莊政宏、林棋瀚</td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
        <div class="col-sm-6 text-left">
            <div class="entry">
                <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                    <tbody><tr>
                        <td width="5%">12</td>
                        <td>威爾森氏症常見藥物療法有效性及安全性之文獻回顧分析<br>2014年國際醫學資訊聯合研討會<br>台北，2014.11.15 ~ 2014.11.16<br>陳瑞奇、莊政宏、謝盛元、王經篤</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">13</td>
                        <td>Reversible Image steganography for an Optical Encryption System<br>The 27th IPPR Conference on Computer Vision, Graphics, and Image Processing (CVGIP 2014)<br>墾丁，2014.8.17 ~ 2014.8.19<br>莊政宏、陳彥霖</td>
                    </tr>
                    <tr>
                        <td width="5%">14</td>
                        <td>基於暗原色先驗之單張影像深度計算<br>2013全國計算機會議<br>台中，2013.12.13 ~ 2013.12.14<br>莊政宏、沈偉誌、連振佑、蔡松賢</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">15</td>
                        <td>應用於視訊監控之人體偵測系統<br>2013全國計算機會議<br>台中，2013.12.13 ~ 2013.12.14<br>莊政宏、連振佑、陳皇志</td>
                    </tr>
                    <tr>
                        <td width="5%">16</td>
                        <td>Dark Channel Prior Based Depth Generation from a Single Outdoor Image<br>The 26th IPPR Conference on Computer Vision, Graphics, and Image Processing (CVGIP 2013)<br>宜蘭，2013.8.18 ~ 2013.8.20<br>莊政宏、沈偉誌、連振佑</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">17</td>
                        <td>Human Body Detection for Video Surveillance Applications<br>The 26th IPPR Conference on Computer Vision, Graphics, and Image Processing (CVGIP 2013)<br>宜蘭，2013.8.18 ~ 2013.8.20<br>莊政宏、連振佑</td>
                    </tr>
                    <tr>
                        <td width="5%">18</td>
                        <td>Dynamic Warping-Based Content-Aware Image Resizing<br>The 24th IPPR Conference on Computer Vision, Graphics, and Image Processing (CVGIP 2011)<br>嘉義，2011.8.21 ~ 2011.8.23<br>莊政宏、李旨平</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">19</td>
                        <td>The Application of Color Information for Video Object Tracking<br>The 23rd IPPR Conference on Computer Vision, Graphics, and Image Processing (CVGIP 2010)<br>高雄，2010.8.15 ~ 2010.8.17<br>莊政宏、趙員磊、李旨平</td>
                    </tr>
                    <tr>
                        <td width="5%">20</td>
                        <td>基於主動性輪廓模型及色彩資訊分類之視訊物體<br>2009全國計算機會議<br>台北，2009.11.27 ~ 2009.11.28</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">21</td>
                        <td>Color Image and Data Steganography for Optical Color Image Cryptosystems<br>The 22th IPPR Conference on Computer Vision, Graphics, and Image Processing (CVGIP 2009)<br>南投，2009.8.23 ~ 2009.8.25<br>莊政宏、曾信淳、林國祥</td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
    </div>
</div>

<?php footer() ?>
</body>
</html>

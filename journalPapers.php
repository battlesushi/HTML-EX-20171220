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
            <?php navbar(3) ?>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-6 text-left">
            <div class="entry">
                <table cellpadding="0" cellspacing="0" class="tb_main">
                    <tbody><tr class="odd">
                        <td width="5%">1</td>
                        <td>Human Detection for Video Surveillance in Hospital  ，Journal of Electronic Science and Technology ,EI <br>莊政宏(Cheng-Hung Chuang)，連振佑(Zhen-You Lian)，鄧博仁(Po-Ren Teng)，林妙貞(Miao-Jen Lin)<br>2017&nbsp;Jun，15(2):147-152</td>
                    </tr>
                    <tr>
                        <td width="5%">2</td>
                        <td>A Smart Dynamic Resource Allocation Model for Patient-Driven Mobile Medical Information System Using C4.5 Algorithm  ，Journal of Electronic Science and Technology ,EI <br>羅政勤(Ching-Kan Lo)，陳興忠(Hsing-Chung Chen)，李佩淵(Pei-Yuan Lee)，古鳴洲(Ming-Chou Ku)，Lidia Ogiela(Lidia Ogiela)，莊政宏(Cheng-Hung Chuang)<br>2017&nbsp;，():</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">3</td>
                        <td>Multi-Target Segmentation in a Multi-Camera Surveillance Environment  ，ICIC Express Letters, Part B: Applications ,EI <br>莊政宏(Cheng-Hung Chuang)，Chao-Ching Lee(Chao-Ching Lee)，Ye-Chi Wu(Ye-Chi Wu)，Kuan-Kai Huang(Kuan-Kai Huang)，Ching-Kan Lo(Ching-Kan Lo)，周永振(YUNG-CHEN CHOU)<br>2016&nbsp;Jun，7(6):1359-1364</td>
                    </tr>
                    <tr>
                        <td width="5%">4</td>
                        <td>A Simulation of Natural Wolfberry Recognition Based on Color Classification  ，ICIC Express Letters ,EI <br>莊政宏(Cheng-Hung Chuang)，陳瑞奇(Jui-Chi Chen)，周永振(YUNG-CHEN CHOU)<br>2016&nbsp;Jun，10(6):1273-1278</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">5</td>
                        <td>How Does a Mobile Nursing App Play a Role in Job Retention of Nurses?  ，ICIC Express Letters, Part B: Applications ,EI <br>羅政勤(Ching-Kan Lo)，Pei-Yuan Lee(Pei-Yuan Lee)，Kuan-Kai Huang(Kuan-Kai Huang)，Shang-Chi Chiang(Shang-Chi Chiang)，Ya-Chiu Liao(Ya-Chiu Liao)，莊政宏(Cheng-Hung Chuang)<br>2016&nbsp;May，7(5):1155-1161</td>
                    </tr>
                    <tr>
                        <td width="5%">6</td>
                        <td>Combination Therapy Using Chelating Agent and Zinc for Wilson’s Disease  ，Journal of Medical and Biological Engineering ,SCI <br>陳瑞奇(Jui-Chi Chen)，莊政宏(Cheng-Hung Chuang)，王經篤(Jing-Doo Wang)，王奇威(CHI-WEI,WANG)<br>2015&nbsp;Dec，35(6):697-708</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">7</td>
                        <td>Depth Estimation from a Single Image Using Dark Channel Prior and Color Information  ，ICIC Express Letters ,EI <br>莊政宏(Cheng-Hung Chuang)，沈偉誌(Wei-Chih Shen)，連振佑(Zhen-You Lian)，洪振偉(Zeng-Wei Hong)<br>2015&nbsp;Mar，9(3):799-804</td>
                    </tr>
                    <tr>
                        <td width="5%">8</td>
                        <td>A Systematic Review of Studies on Effectiveness and Safety of Commonly Used Medications for Treating Wilson’s Disease  ，The Journal of Taiwan Association for Medical Informatics ,Other <br>陳瑞奇(Jui-Chi Chen)，莊政宏(Cheng-Hung Chuang)，謝盛元(Sheng-Yuan Hsieh)，王經篤(Jing-Doo Wang)<br>2015&nbsp;Mar，24(1):11-22</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">9</td>
                        <td>A Video Surveillance System for Home Care Applications  ，ICIC Express Letters ,EI <br>莊政宏(Cheng-Hung Chuang)，連振佑(Zhen-You Lian)<br>2014&nbsp;Apr，8(4):1111-1118</td>
                    </tr>
                    <tr>
                        <td width="5%">10</td>
                        <td>A Steganography-Based Optical Image Encryption System Using RGB Channel Integration  ，Journal of Electronic Science and Technology ,EI <br>莊政宏(Cheng-Hung Chuang)<br>2013&nbsp;Mar，11(1):3-8</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">11</td>
                        <td>Steganographic optical image encryption system based on reversible data hiding and double random phase encoding  ，OPTICAL ENGINEERING ,SCI <br>莊政宏(Cheng-Hung Chuang)，陳彥霖(Yen-Lin Chen)<br>2013&nbsp;Feb，52(2):028201-1-028201-10</td>
                    </tr>
                    <tr>
                        <td width="5%">12</td>
                        <td>A Knowledge-based System for Extracting Text-lines from Mixed and Overlapping Text/graphics Compound Document Images  ，EXPERT SYSTEMS WITH APPLICATIONS ,SCI <br>陳彥霖(Yen-Lin Chen)，洪振偉(Zeng-Wei Hong)，莊政宏(Cheng-Hung Chuang)<br>2012&nbsp;Jan，39(1):494-507</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">13</td>
                        <td>A Virtual Optical Encryption Software System for Image Security  ，Journal of Convergence Information Technology ,EI <br>莊政宏(Cheng-Hung Chuang)，顏志燁(Zhi-Ye Yen)，林國祥(Guo-Shiang Lin)，洪振偉(Zeng-Wei Hong)<br>2011&nbsp;Feb，6(2):357-364</td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
        <div class="col-sm-6 text-left">
            <div class="entry">
                <table cellpadding="0" cellspacing="0" class="tb_main">
                    <tbody><tr>
                        <td width="5%">14</td>
                        <td>Embedded Vision-based Nighttime Driver Assistance System  ，Journal of Convergence Information Technology ,EI <br>莊政宏(Cheng-Hung Chuang)<br>2011&nbsp;Feb，6(2):283-292</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">15</td>
                        <td>Scripting Animated Conversational Agents in an Internet Multi-Agent Advertising System  ，Journal of Convergence Information Technology ,EI <br>洪振偉(Zeng-Wei Hong)，莊政宏(Cheng-Hung Chuang)<br>2011&nbsp;Feb，6(2):293-305</td>
                    </tr>
                    <tr>
                        <td width="5%">16</td>
                        <td>Moving Object Segmentation and Tracking Using Active Contour and Color Classification Models  ，Proceedings - 2010 IEEE International Symposium on Multimedia, ISM 2010 ,EI <br>莊政宏(Cheng-Hung Chuang)，趙員磊(Yuan-Lei Chao)，李旨平(Zhi-Ping Li)<br>2010&nbsp;Dec，():73-80</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">17</td>
                        <td>Beyond p-values: averaged and reproducible evidence in fMRI experiments  ，PSYCHOPHYSIOLOGY ,SCI <br><br>2009&nbsp;Mar，46(2):367-378</td>
                    </tr>
                    <tr>
                        <td width="5%">18</td>
                        <td>Intensity Gradient Self-Organizing Map for Cerebral Cortex Reconstruction  ，Lecture Notes in Computer Science (including subseries Lecture Notes in Artificial Intelligence and Lecture Notes in Bioinformatics) ,EI <br><br>2008&nbsp;Jun，4984():365-373</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">19</td>
                        <td>An optical image cryptosystem based on adaptive steganography  ，OPTICAL ENGINEERING ,SCI <br>莊政宏(Cheng-Hung Chuang)，林國祥(Guo-Shiang Lin)<br>2008&nbsp;Apr，47(4):047002-1-047002-9</td>
                    </tr>
                    <tr>
                        <td width="5%">20</td>
                        <td>Application of Self-Organizing Map (SOM) for Cerebral Cortex Reconstruction  ，International Journal of Computational Intelligence Research ,Other <br>莊政宏(Cheng-Hung Chuang)，Philip E. Cheng(Philip E. Cheng)，Michelle Liou(Michelle Liou)，Cheng-Yuan Liou(Cheng-Yuan Liou)，Yen-Ting Kuo(Yen-Ting Kuo)<br>2007&nbsp;Mar，3(1):26-30</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">21</td>
                        <td>Automatic multi-object segmentation by two-phase snake processing  ，Asian Journal of Health and Information Sciences ,Other <br>莊政宏(Cheng-Hung Chuang)，賴文能(Wen-Nung Lie)<br>2006&nbsp;Oct，1(3):296-320</td>
                    </tr>
                    <tr>
                        <td width="5%">22</td>
                        <td>A downstream algorithm based on extended gradient vector flow field for object segmentation  ，IEEE TRANSACTIONS ON IMAGE PROCESSING ,SCI <br>莊政宏(Cheng-Hung Chuang)，賴文能(Wen-Nung Lie)<br>2004&nbsp;Oct，13(10):1379-1392</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">23</td>
                        <td>A public-key-based optical image cryptosystem based on data embedding techniques  ，OPTICAL ENGINEERING ,SCI <br>林國祥(Guo-Shiang Lin)，張軒庭(Hsuan T. Chang)，賴文能(Wen-Nung Lie)，莊政宏(Cheng-Hung Chuang)<br>2003&nbsp;Aug，42(8):2331-2339</td>
                    </tr>
                    <tr>
                        <td width="5%">24</td>
                        <td>Contour-based image registration with local deformations  ，OPTICAL ENGINEERING ,SCI <br>賴文能(Wen-Nung Lie)，莊政宏(Cheng-Hung Chuang)<br>2003&nbsp;May，42(5):1405-1416</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">25</td>
                        <td>A fast and accurate snake model for object contour detection  ，ELECTRONICS LETTERS ,SCI <br>賴文能(Wen-Nung Lie)，莊政宏(Cheng-Hung Chuang)<br>2001&nbsp;May，37(10):624-626</td>
                    </tr>
                    </tbody></table>
            </div>
            </div>
        </div>
    </div>
</div>


<?php footer() ?>
</body>
</html>

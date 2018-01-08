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
            <?php navbar(7) ?>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-12 text-left">
            <div class="entry">
                <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">

                    <tbody><tr class="odd">

                        <td width="5%">1</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=GRG00093&amp;mCos_Class=AM&amp;mSmtr=1061')"> (大學日間部      )資訊與科技【第106學年第1學期：AM班】<br>教育同學正確的資訊使用概念，並且教授資訊科技基本原理以及與日常生活相關的應用</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">2</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=GRG00093&amp;mCos_Class=AE&amp;mSmtr=1061')"> (大學日間部      )資訊與科技【第106學年第1學期：AE班】<br>教育同學正確的資訊使用概念，並且教授資訊科技基本原理以及與日常生活相關的應用</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">3</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320984&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )產業實務實習(一) (3+1分流)【第106學年第1學期：A班】<br>協助系上學生學習產業工作及實務實作應用技能。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">4</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320982&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )產業學習(一) (3+1分流)【第106學年第1學期：A班】<br>協助系上學生了解產業工作發展及實務應用技能。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">5</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320980&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )產業服務(一) (3+1分流)【第106學年第1學期：A班】<br>了解產業服務的意義及內涵。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">6</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320978&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )產業專題實作(3+1分流)【第106學年第1學期：A班】<br>協助系上學生了解未來的相關工作發展及實務、技能。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">7</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320966&amp;mCos_Class=B&amp;mSmtr=1061')"> (大學日間部      )學輔時間(四)【第106學年第1學期：B班】<br></a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">8</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320167&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )數位影像處理【第106學年第1學期：A班】<br>本課程提供給學生對於影像處理一個概括性的瞭解，並提供給學生對於影像處理演算法的設計和程式編寫的練習。本課程中關於影像處理大部分的概念和技術是以二維灰階的處理方式進行，進而擴展到三維的彩色影像或多維的訊號處理。本課程中所採用對於各種影像處理演算法實物實驗的方式，可以讓學生更容易學習到影像處理演算法的工作流程及使用的時機。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">9</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320047&amp;mCos_Class=B&amp;mSmtr=1061')"> (大學日間部      )多媒體導論【第106學年第1學期：B班】<br>認識多媒體(包括文字、音訊、影像、視訊等)的基本概念，瞭解多媒體的基本原理，學習多媒體相關的基本處理方法、技術及應用。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">10</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310991&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )產業專題實作(7+1分流)【第106學年第1學期：A班】<br>協助系上學生了解未來的相關工作發展及實務、技能。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">11</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310981&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )產業實務實習(一) (3+1分流)【第106學年第1學期：A班】<br>協助系上學生學習產業工作及實務實作應用技能。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">12</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310979&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )產業學習(一) (3+1分流)【第106學年第1學期：A班】<br>協助系上學生了解產業工作發展及實務應用技能。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">13</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310977&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )產業服務(一) (3+1分流)【第106學年第1學期：A班】<br>了解產業服務的意義及內涵。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">14</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310975&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )產業專題實作(3+1分流)【第106學年第1學期：A班】<br>協助系上學生了解未來的相關工作發展及實務、技能。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">15</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310974&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )產業實務實習(7+1分流)【第106學年第1學期：A班】<br>協助系上學生學習產業工作及實務實作應用技能。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">16</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310973&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )產業學習(7+1分流)【第106學年第1學期：A班】<br>協助系上學生了解產業工作發展及實務應用技能。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">17</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310972&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )產業服務(7+1分流)【第106學年第1學期：A班】<br>了解產業服務的意義及內涵。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">18</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE300045&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )基礎程式設計(二)【第106學年第1學期：A班】<br></a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">19</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE300044&amp;mCos_Class=A&amp;mSmtr=1061')"> (大學日間部      )基礎程式設計(一)【第106學年第1學期：A班】<br>在本課程中，將教學重點放在物件導向的觀念上，以Java教學讓學生必須以物件導向的方式設計程式。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">20</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE400030&amp;mCos_Class=A&amp;mSmtr=1052')"> (碩士在職專班    )影像處理【第105學年第2學期：A班】<br>本課程提供給學生對於影像處理一個概括性的瞭解，並提供給學生對於影像處理演算法的設計和程式編寫的練習。本課程中關於影像處理大部分的概念和技術是以二維灰階的處理方式進行，進而擴展到三維的彩色影像或多維的訊號處理。本課程中所採用對於各種影像處理演算法實物實驗的方式，可以讓學生更容易學習到影像處理演算法的工作流程及使用的時機。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">21</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320977&amp;mCos_Class=A&amp;mSmtr=1052')"> (大學日間部      )產業實務實習(7+1分流)【第105學年第2學期：A班】<br>協助系上學生學習產業工作及實務實作應用技能。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">22</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320976&amp;mCos_Class=A&amp;mSmtr=1052')"> (大學日間部      )產業學習(7+1分流)【第105學年第2學期：A班】<br>協助系上學生了解產業工作發展及實務應用技能。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">23</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320975&amp;mCos_Class=A&amp;mSmtr=1052')"> (大學日間部      )產業服務(7+1分流)【第105學年第2學期：A班】<br>了解產業服務的意義及內涵。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">24</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320974&amp;mCos_Class=A&amp;mSmtr=1052')"> (大學日間部      )產業資訊研討(7+1分流)【第105學年第2學期：A班】<br>協助系上學生學習及運用產業資訊新知。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">25</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320965&amp;mCos_Class=A&amp;mSmtr=1052')"> (大學日間部      )學輔時間(三)【第105學年第2學期：A班】<br></a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">26</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320168&amp;mCos_Class=A&amp;mSmtr=1052')"> (大學日間部      )線性代數【第105學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">27</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310974&amp;mCos_Class=A&amp;mSmtr=1052')"> (大學日間部      )產業實務實習(7+1分流)【第105學年第2學期：A班】<br>協助系上學生學習產業工作及實務實作應用技能。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">28</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310973&amp;mCos_Class=A&amp;mSmtr=1052')"> (大學日間部      )產業學習(7+1分流)【第105學年第2學期：A班】<br>協助系上學生了解產業工作發展及實務應用技能。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">29</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310972&amp;mCos_Class=A&amp;mSmtr=1052')"> (大學日間部      )產業服務(7+1分流)【第105學年第2學期：A班】<br>了解產業服務的意義及內涵。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">30</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310971&amp;mCos_Class=A&amp;mSmtr=1052')"> (大學日間部      )產業資訊研討(7+1分流)【第105學年第2學期：A班】<br>協助系上學生學習及運用產業資訊新知。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">31</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310168&amp;mCos_Class=A&amp;mSmtr=1052')"> (大學日間部      )線性代數【第105學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">32</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=XDU00029&amp;mCos_Class=A&amp;mSmtr=1051')"> (大學日間部      )多媒體技術與應用【第105學年第1學期：A班】<br>認識多媒體(包括音訊、影像、視訊、動畫等)技術與應用的基本原理與方法，瞭解如何撰寫多媒體處理的基本程式，學習多媒體技術相關的程式設計及其應用。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">33</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320965&amp;mCos_Class=A&amp;mSmtr=1051')"> (大學日間部      )學輔時間(三)【第105學年第1學期：A班】<br></a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">34</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320047&amp;mCos_Class=A&amp;mSmtr=1051')"> (大學日間部      )多媒體導論【第105學年第1學期：A班】<br>認識多媒體(包括文字、音訊、影像、視訊等)的基本概念，瞭解多媒體的基本原理，學習多媒體相關的基本處理方法、技術及應用。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">35</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310699&amp;mCos_Class=A&amp;mSmtr=1051')"> (大學日間部      )數位內容資訊安全【第105學年第1學期：A班】<br>本課程旨在介紹有關電腦系統的漏洞及保護、電腦病毒的防護、電子商務所面臨的認證和交易安全及密碼學相關之理論等等問題。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">36</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310167&amp;mCos_Class=A&amp;mSmtr=1051')"> (大學日間部      )數位影像處理【第105學年第1學期：A班】<br>本課程提供給學生對於影像處理一個概括性的瞭解，並提供給學生對於影像處理演算法的設計和程式編寫的練習。本課程中關於影像處理大部分的概念和技術是以二維灰階的處理方式進行，進而擴展到三維的彩色影像或多維的訊號處理。本課程中所採用對於各種影像處理演算法實物實驗的方式，可以讓學生更容易學習到影像處理演算法的工作流程及使用的時機。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">37</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310047&amp;mCos_Class=A&amp;mSmtr=1051')"> (大學日間部      )多媒體導論【第105學年第1學期：A班】<br>認識多媒體(包括文字、音訊、影像、視訊等)的基本概念，瞭解多媒體的基本原理，學習多媒體相關的基本處理方法、技術及應用。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">38</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE400030&amp;mCos_Class=A&amp;mSmtr=1042')"> (碩士在職專班    )影像處理【第104學年第2學期：A班】<br>本課程提供給學生對於影像處理一個概括性的瞭解，並提供給學生對於影像處理演算法的設計和程式編寫的練習。本課程中關於影像處理大部分的概念和技術是以二維灰階的處理方式進行，進而擴展到三維的彩色影像或多維的訊號處理。本課程中所採用對於各種影像處理演算法實物實驗的方式，可以讓學生更容易學習到影像處理演算法的工作流程及使用的時機。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">39</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320964&amp;mCos_Class=B&amp;mSmtr=1042')"> (大學日間部      )學輔時間(二)【第104學年第2學期：B班】<br></a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">40</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320700&amp;mCos_Class=A&amp;mSmtr=1042')"> (大學日間部      )數位典藏【第104學年第2學期：A班】<br>本課程提供給學生對於數位典藏一個概括性的瞭解，並介紹數位化工作的流程、相關數位典藏技術的理論及實務。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">41</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320669&amp;mCos_Class=A&amp;mSmtr=1042')"> (大學日間部      )互動式多媒體設計【第104學年第2學期：A班】<br>了解互動媒體的設計概念與實務操作</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">42</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320168&amp;mCos_Class=A&amp;mSmtr=1042')"> (大學日間部      )線性代數【第104學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">43</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310168&amp;mCos_Class=A&amp;mSmtr=1042')"> (大學日間部      )線性代數【第104學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">44</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=XDU00029&amp;mCos_Class=A&amp;mSmtr=1041')"> (大學日間部      )多媒體技術與應用【第104學年第1學期：A班】<br>認識多媒體(包括音訊、影像、視訊、動畫等)技術與應用的基本原理與方法，瞭解如何撰寫多媒體處理的基本程式，學習多媒體技術相關的程式設計及其應用。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">45</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320964&amp;mCos_Class=B&amp;mSmtr=1041')"> (大學日間部      )學輔時間(二)【第104學年第1學期：B班】<br></a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">46</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320676&amp;mCos_Class=A&amp;mSmtr=1041')"> (大學日間部      )行動遊戲設計【第104學年第1學期：A班】<br>使學生理解Android平臺下開發的基礎知識，以及遊戲程式設計的實用技巧。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">47</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320167&amp;mCos_Class=A&amp;mSmtr=1041')"> (大學日間部      )數位影像處理【第104學年第1學期：A班】<br>本課程提供給學生對於影像處理一個概括性的瞭解，並提供給學生對於影像處理演算法的設計和程式編寫的練習。本課程中關於影像處理大部分的概念和技術是以二維灰階的處理方式進行，進而擴展到三維的彩色影像或多維的訊號處理。本課程中所採用對於各種影像處理演算法實物實驗的方式，可以讓學生更容易學習到影像處理演算法的工作流程及使用的時機。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">48</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320047&amp;mCos_Class=A&amp;mSmtr=1041')"> (大學日間部      )多媒體導論【第104學年第1學期：A班】<br>認識多媒體(包括文字、音訊、影像、視訊等)的基本概念，瞭解多媒體的基本原理，學習多媒體相關的基本處理方法、技術及應用。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">49</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310047&amp;mCos_Class=A&amp;mSmtr=1041')"> (大學日間部      )多媒體導論【第104學年第1學期：A班】<br>認識多媒體(包括文字、音訊、影像、視訊等)的基本概念，瞭解多媒體的基本原理，學習多媒體相關的基本處理方法、技術及應用。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">50</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00700&amp;mCos_Class=A&amp;mSmtr=1032')"> (大學日間部      )數位典藏【第103學年第2學期：A班】<br>本課程提供給學生對於數位典藏一個概括性的瞭解，並介紹數位化工作的流程、相關數位典藏技術的理論及實務。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">51</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00669&amp;mCos_Class=A&amp;mSmtr=1032')"> (大學日間部      )互動式多媒體設計【第103學年第2學期：A班】<br>認識了解互動式多媒體的基本內涵</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">52</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00168&amp;mCos_Class=A&amp;mSmtr=1032')"> (大學日間部      )線性代數【第103學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">53</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I2U00168&amp;mCos_Class=A&amp;mSmtr=1032')"> (大學日間部      )線性代數【第103學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">54</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=67D00007&amp;mCos_Class=A&amp;mSmtr=1032')"> (研究所博士班    )影像處理【第103學年第2學期：A班】<br>Give the student a general understanding of the fundamentals of digital image processing and provide student with hands-on experience in designing and programming image processing algorithms.</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">55</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=66E00030&amp;mCos_Class=A&amp;mSmtr=1032')"> (碩士在職專班    )影像處理【第103學年第2學期：A班】<br>本課程提供給學生對於影像處理一個概括性的瞭解，並提供給學生對於影像處理演算法的設計和程式編寫的練習。本課程中關於影像處理大部分的概念和技術是以二維灰階的處理方式進行，進而擴展到三維的彩色影像或多維的訊號處理。本課程中所採用對於各種影像處理演算法實物實驗的方式，可以讓學生更容易學習到影像處理演算法的工作流程及使用的時機。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">56</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=XDU00029&amp;mCos_Class=A&amp;mSmtr=1031')"> (大學日間部      )多媒體技術與應用【第103學年第1學期：A班】<br>認識多媒體(包括音訊、影像、視訊、動畫等)技術與應用的基本原理與方法，瞭解如何撰寫多媒體處理的基本程式，學習多媒體技術相關的程式設計及其應用。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">57</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00668&amp;mCos_Class=A&amp;mSmtr=1031')"> (大學日間部      )人機系統【第103學年第1學期：A班】<br>使學生理解、應用、人機系統之理論與概念</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">58</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00167&amp;mCos_Class=A&amp;mSmtr=1031')"> (大學日間部      )數位影像處理【第103學年第1學期：A班】<br>本課程提供給學生對於影像處理一個概括性的瞭解，並提供給學生對於影像處理演算法的設計和程式編寫的練習。本課程中關於影像處理大部分的概念和技術是以二維灰階的處理方式進行，進而擴展到三維的彩色影像或多維的訊號處理。本課程中所採用對於各種影像處理演算法實物實驗的方式，可以讓學生更容易學習到影像處理演算法的工作流程及使用的時機。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">59</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00047&amp;mCos_Class=A&amp;mSmtr=1031')"> (大學日間部      )多媒體導論【第103學年第1學期：A班】<br>認識多媒體(包括文字、音訊、影像、視訊等)的基本概念，瞭解多媒體的基本原理，學習多媒體相關的基本處理方法、技術及應用。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">60</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I2U00047&amp;mCos_Class=A&amp;mSmtr=1031')"> (大學日間部      )多媒體導論【第103學年第1學期：A班】<br>認識多媒體(包括文字、音訊、影像、視訊等)的基本概念，瞭解多媒體的基本原理，學習多媒體相關的基本處理方法、技術及應用。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">61</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00700&amp;mCos_Class=A&amp;mSmtr=1022')"> (大學日間部      )數位典藏【第102學年第2學期：A班】<br>本課程提供給學生對於數位典藏一個概括性的瞭解，並介紹數位化工作的流程、相關數位典藏技術的理論及實務。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">62</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00168&amp;mCos_Class=A&amp;mSmtr=1022')"> (大學日間部      )線性代數【第102學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">63</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I2U00688&amp;mCos_Class=A&amp;mSmtr=1022')"> (大學日間部      )嵌入式系統程式設計【第102學年第2學期：A班】<br>使學生理解專題應用可利用Raspberry Pi完成。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">64</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I2U00168&amp;mCos_Class=A&amp;mSmtr=1022')"> (大學日間部      )線性代數【第102學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">65</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=66E00030&amp;mCos_Class=A&amp;mSmtr=1022')"> (碩士在職專班    )影像處理【第102學年第2學期：A班】<br>本課程提供給學生對於影像處理一個概括性的瞭解，並提供給學生對於影像處理演算法的設計和程式編寫的練習。本課程中關於影像處理大部分的概念和技術是以二維灰階的處理方式進行，進而擴展到三維的彩色影像或多維的訊號處理。本課程中所採用對於各種影像處理演算法實物實驗的方式，可以讓學生更容易學習到影像處理演算法的工作流程及使用的時機。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">66</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=XDU00029&amp;mCos_Class=A&amp;mSmtr=1021')"> (大學日間部      )多媒體技術與應用【第102學年第1學期：A班】<br>認識多媒體(包括文字、音訊、影像、視訊等)技術與應用的基本原理與方法，瞭解如何撰寫多媒體處理的基本程式，學習多媒體技術相關的程式設計及其應用。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">67</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00047&amp;mCos_Class=A&amp;mSmtr=1021')"> (大學日間部      )多媒體導論【第102學年第1學期：A班】<br>認識多媒體(包括文字、音訊、影像、視訊等)的基本概念，瞭解多媒體的基本原理，學習多媒體相關的基本處理方法、技術及應用。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">68</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=64U00292&amp;mCos_Class=A&amp;mSmtr=1021')"> (大學日間部      )數位匯流終端多媒體技術【第102學年第1學期：A班】<br>使學生了解數位匯流終端多媒體技術。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">69</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00168&amp;mCos_Class=A&amp;mSmtr=1012')"> (大學日間部      )線性代數【第101學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">70</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I2U00168&amp;mCos_Class=A&amp;mSmtr=1012')"> (大學日間部      )線性代數【第101學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">71</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=66E00030&amp;mCos_Class=A&amp;mSmtr=1012')"> (碩士在職專班    )影像處理【第101學年第2學期：A班】<br>本課程提供給學生對於影像處理一個概括性的瞭解，並提供給學生對於影像處理演算法的設計和程式編寫的練習。本課程中關於影像處理大部分的概念和技術是以二維灰階的處理方式進行，進而擴展到三維的彩色影像或多維的訊號處理。本課程中所採用對於各種影像處理演算法實物實驗的方式，可以讓學生更容易學習到影像處理演算法的工作流程及使用的時機。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">72</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00047&amp;mCos_Class=A&amp;mSmtr=1011')"> (大學日間部      )多媒體導論【第101學年第1學期：A班】<br> 認識多媒體(包括文字、音訊、影像、視訊等)的基本概念，瞭解多媒體的基本原理，學習多媒體相關的基本處理方法、技術及應用。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">73</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I2U00047&amp;mCos_Class=A&amp;mSmtr=1011')"> (大學日間部      )多媒體導論【第101學年第1學期：A班】<br>認識多媒體(包括文字、音訊、影像、視訊等)的基本概念，瞭解多媒體的基本原理，學習多媒體相關的基本處理方法、技術及應用。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">74</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=65M00167&amp;mCos_Class=A&amp;mSmtr=1011')"> (研究所碩士班    )3D物體成像【第101學年第1學期：A班】<br>本課程主要在介紹電腦繪圖及影像處理技術於3D物體成像之相關原理與演算法，除了講述電腦繪圖及影像處理的基礎知識及技術之外，更著重在演算法的使用以及程式的寫作技巧，以進行3D物體之成像，可將立體資料視覺化，最後將3D物體導入於虛擬實境之中。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">75</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=64U00285&amp;mCos_Class=A&amp;mSmtr=1011')"> (大學日間部      )3D物體成像【第101學年第1學期：A班】<br>本課程主要在介紹電腦繪圖及影像處理技術於3D物體成像之相關原理與演算法，除了講述電腦繪圖及影像處理的基礎知識及技術之外，更著重在演算法的使用以及程式的寫作技巧，以進行3D物體之成像，可將立體資料視覺化，最後將3D物體導入於虛擬實境之中。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">76</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00168&amp;mCos_Class=A&amp;mSmtr=1002')"> (大學日間部      )線性代數【第100學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">77</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I2U00168&amp;mCos_Class=A&amp;mSmtr=1002')"> (大學日間部      )線性代數【第100學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">78</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=66E00030&amp;mCos_Class=A&amp;mSmtr=1002')"> (碩士在職專班    )影像處理【第100學年第2學期：A班】<br>This course gives students a general understanding of image processing and provides students a discrete approach in designing and programming image processing algorithms. Most of the concepts and techniques presented in this course are restricted to 2D greyscale image processing since they can be extended easily to three or more dimensions. Hands-on experimenting with the various algorithms discussed in this course is an essential way to learn how the various processes work and when they should be used.</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">79</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00047&amp;mCos_Class=A&amp;mSmtr=1001')"> (大學日間部      )多媒體導論【第100學年第1學期：A班】<br> 認識多媒體(包括文字、音訊、影像、視訊等)的基本概念，瞭解多媒體的基本原理，學習多媒體相關的基本處理方法、技術及應用。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">80</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I2U00047&amp;mCos_Class=A&amp;mSmtr=1001')"> (大學日間部      )多媒體導論【第100學年第1學期：A班】<br>認識多媒體(包括文字、音訊、影像、視訊等)的基本概念，瞭解多媒體的基本原理，學習多媒體相關的基本處理方法、技術及應用。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">81</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=65M00167&amp;mCos_Class=A&amp;mSmtr=1001')"> (研究所碩士班    )3D物體成像【第100學年第1學期：A班】<br>本課程主要在介紹電腦繪圖及影像處理技術於3D物體成像之相關原理與演算法，除了講述電腦繪圖及影像處理的基礎知識及技術之外，更著重在演算法的使用以及程式的寫作技巧，以進行3D物體之成像，可將立體資料視覺化，最後將3D物體導入於虛擬實境之中。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">82</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=64U00285&amp;mCos_Class=A&amp;mSmtr=1001')"> (大學日間部      )3D物體成像【第100學年第1學期：A班】<br>本課程主要在介紹電腦繪圖及影像處理技術於3D物體成像之相關原理與演算法，除了講述電腦繪圖及影像處理的基礎知識及技術之外，更著重在演算法的使用以及程式的寫作技巧，以進行3D物體之成像，可將立體資料視覺化，最後將3D物體導入於虛擬實境之中。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">83</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=64U00238&amp;mCos_Class=A&amp;mSmtr=1001')"> (大學日間部      )多媒體技術及應用【第100學年第1學期：A班】<br>認識多媒體(包括文字、音訊、影像、視訊等)技術與應用的基本原理與方法，瞭解如何撰寫多媒體處理的基本程式，學習多媒體技術相關的程式設計及其應用。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">84</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00168&amp;mCos_Class=A&amp;mSmtr=0992')"> (大學日間部      )線性代數【第099學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">85</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I2U00168&amp;mCos_Class=A&amp;mSmtr=0992')"> (大學日間部      )線性代數【第099學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">86</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=66E00030&amp;mCos_Class=A&amp;mSmtr=0992')"> (碩士在職專班    )影像處理【第099學年第2學期：A班】<br>This course gives students a general understanding of image processing and provides students a discrete approach in designing and programming image processing algorithms. Most of the concepts and techniques presented in this course are restricted to 2D greyscale image processing since they can be extended easily to three or more dimensions. Hands-on experimenting with the various algorithms discussed in this course is an essential way to learn how the various processes work and when they should be used.</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">87</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00235&amp;mCos_Class=A&amp;mSmtr=0991')"> (大學日間部      )多媒體資料處理程式設計【第099學年第1學期：A班】<br>認識多媒體(包括文字、音訊、影像、視訊等)資料處理的基本概念，瞭解如何撰寫多媒體資料處理的基本程式，學習多媒體資料處理相關的程式設計及其應用。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">88</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00014&amp;mCos_Class=B&amp;mSmtr=0991')"> (大學日間部      )多媒體導論【第099學年第1學期：B班】<br>1.認識多媒體的基本概念及資料形態
                                2.瞭解多媒體的基本處理方法及技術
                                3.多媒體的實際製作
                                4.認識多媒體的傳輸及通訊
                                5.多媒體的整合與應用</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">89</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00014&amp;mCos_Class=A&amp;mSmtr=0991')"> (大學日間部      )多媒體導論【第099學年第1學期：A班】<br>1.認識多媒體的基本概念及資料形態
                                2.瞭解多媒體的基本處理方法及技術
                                3.多媒體的實際製作
                                4.認識多媒體的傳輸及通訊
                                5.多媒體的整合與應用</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">90</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00120&amp;mCos_Class=B&amp;mSmtr=0982')"> (大學日間部      )線性代數【第098學年第2學期：B班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題，以及練習使用MATLAB程式設計進行線性代數系統求解問題。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">91</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00120&amp;mCos_Class=A&amp;mSmtr=0982')"> (大學日間部      )線性代數【第098學年第2學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題，以及練習使用MATLAB程式設計進行線性代數系統求解問題。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">92</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00116&amp;mCos_Class=A&amp;mSmtr=0982')"> (大學日間部      )電腦圖學概論【第098學年第2學期：A班】<br>介紹計算機圖學的相關原理與演算法，除了講述電腦圖學的基礎知識外，更著重在演算法的使用以及程式的寫作技巧，以啟發學生的思考，培養學生對於3D電腦圖學的興趣及其獨立研究與應用的能力。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">93</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00116&amp;mCos_Class=A&amp;mSmtr=0981')"> (大學日間部      )電腦圖學概論【第098學年第1學期：A班】<br>介紹計算機圖學的相關原理與演算法，除了講述電腦圖學的基礎知識外，更著重在演算法的使用以及程式的寫作技巧，以啟發學生的思考，培養學生對於3D電腦圖學的興趣及其獨立研究與應用的能力。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">94</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00088&amp;mCos_Class=B&amp;mSmtr=0981')"> (大學日間部      )線性代數【第098學年第1學期：B班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題，以及練習使用MATLAB程式設計進行線性代數系統求解問題。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">95</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00088&amp;mCos_Class=A&amp;mSmtr=0981')"> (大學日間部      )線性代數【第098學年第1學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題，以及練習使用MATLAB程式設計進行線性代數系統求解問題。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">96</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=67D00007&amp;mCos_Class=A&amp;mSmtr=0972')"> (研究所博士班    )影像處理【第097學年第2學期：A班】<br>This course gives students a general understanding of image processing and provides students a discrete approach in designing and programming image processing algorithms. Most of the concepts and techniques presented in this course are restricted to 2D gr</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">97</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00014&amp;mCos_Class=B&amp;mSmtr=0972')"> (大學日間部      )多媒體導論【第097學年第2學期：B班】<br>1.認識多媒體的基本概念及資料形態
                                2.瞭解多媒體的基本處理方法及技術
                                3.多媒體的實際製作
                                4.認識多媒體的傳輸及通訊
                                5.多媒體的整合與應用</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">98</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00014&amp;mCos_Class=A&amp;mSmtr=0972')"> (大學日間部      )多媒體導論【第097學年第2學期：A班】<br>1.認識多媒體的基本概念及資料形態
                                2.瞭解多媒體的基本處理方法及技術
                                3.多媒體的實際製作
                                4.認識多媒體的傳輸及通訊
                                5.多媒體的整合與應用</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">99</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00088&amp;mCos_Class=B&amp;mSmtr=0971')"> (大學日間部      )線性代數【第097學年第1學期：B班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題，以及練習使用MATLAB程式設計進行線性代數系統求解問題。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">100</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00088&amp;mCos_Class=A&amp;mSmtr=0971')"> (大學日間部      )線性代數【第097學年第1學期：A班】<br>線性代數為所有工程中為必備之基礎工具，本課程希望幫助學生了解向量空間、座標變換、線性變換、特徵值、特徵向量等觀念，並希望同學能實際掌握線性代數的操作技巧且能實際應用於解聯立方程式、矩陣函數等問題，以及練習使用MATLAB程式設計進行線性代數系統求解問題。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">101</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00054&amp;mCos_Class=A&amp;mSmtr=0971')"> (大學日間部      )嵌入式多媒體系統設計【第097學年第1學期：A班】<br>隨著電腦軟硬體設備的發展，網路與通訊技術的普及，多媒體系統的應用已經越來越廣泛，電腦使用者對於多媒體資料的使用量也大幅的成長。本課程的目標，在於引導學生學習以嵌入式程式之相關基礎概念與實作經驗完成多媒體系統之設計，並且讓學生能瞭解多媒體的編輯及資料表示方</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">102</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00100&amp;mCos_Class=A&amp;mSmtr=0962')"> (大學日間部      )電腦圖學【第096學年第2學期：A班】<br>介紹計算機圖學的相關原理與演算法，除了講述電腦圖學的基礎知識外，更著重在演算法的使用以及程式的寫作技巧，以啟發學生的思考，培養學生對於3D電腦圖學的興趣及其獨立研究與應用的能力。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">103</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00014&amp;mCos_Class=B&amp;mSmtr=0962')"> (大學日間部      )多媒體導論【第096學年第2學期：B班】<br>1.認識多媒體的基本概念
                                2.認識多媒體的資料形態及色彩模型
                                3.瞭解多媒體的基本處理方法及技術
                                4.認識多媒體的傳輸及通訊應用
                                5.認識多媒體的未來發展</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">104</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00014&amp;mCos_Class=A&amp;mSmtr=0962')"> (大學日間部      )多媒體導論【第096學年第2學期：A班】<br>1.認識多媒體的基本概念
                                2.認識多媒體的資料形態及色彩模型
                                3.瞭解多媒體的基本處理方法及技術
                                4.認識多媒體的傳輸及通訊應用
                                5.認識多媒體的未來發展</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">105</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=N3U00023&amp;mCos_Class=B&amp;mSmtr=0961')"> ()計算機概論(一)【第096學年第1學期：B班】<br>This course gives an overview about the fundamentals of computer science. The topic includes number systems, data representation, problem solving, algorithm design, programming languages, operating systems and networks. From this course, students can understand and realize the computer development process.</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">106</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=N3U00023&amp;mCos_Class=A&amp;mSmtr=0961')"> ()計算機概論(一)【第096學年第1學期：A班】<br>This course gives an overview about the fundamentals of computer science. The topic includes number systems, data representation, problem solving, algorithm design, programming languages, operating systems and networks. From this course, students can understand and realize the computer development process.</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">107</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00014&amp;mCos_Class=C&amp;mSmtr=0961')"> (大學日間部      )多媒體導論【第096學年第1學期：C班】<br>1.認識多媒體的基本概念
                                2.認識多媒體的資料形態及色彩模型
                                3.瞭解多媒體的基本處理方法及技術
                                4.認識多媒體的傳輸及通訊應用
                                5.認識多媒體的未來發展</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">108</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00014&amp;mCos_Class=B&amp;mSmtr=0961')"> (大學日間部      )多媒體導論【第096學年第1學期：B班】<br>1.認識多媒體的基本概念
                                2.認識多媒體的資料形態及色彩模型
                                3.瞭解多媒體的基本處理方法及技術
                                4.認識多媒體的傳輸及通訊應用
                                5.認識多媒體的未來發展</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">109</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00014&amp;mCos_Class=A&amp;mSmtr=0961')"> (大學日間部      )多媒體導論【第096學年第1學期：A班】<br>1.認識多媒體的基本概念
                                2.認識多媒體的資料形態及色彩模型
                                3.瞭解多媒體的基本處理方法及技術
                                4.認識多媒體的傳輸及通訊應用
                                5.認識多媒體的未來發展</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">110</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=J0U00099&amp;mCos_Class=A&amp;mSmtr=0952')"> ()計算機概論【第095學年第2學期：A班】<br>1.認識電腦、瞭解電腦運作的基本原理、軟硬體架構及學習電腦的基本操作。
                                2.瞭解網際網路的基本觀念，具備基本的網際網路使用技術與能力。
                                3.培養資訊檢索的能力，瞭解資訊倫理與社會及資訊安全之重要性。
                                4.學習使用基本辦公室軟體工具，如文書處理、試算表及簡報製作等。</a>
                        </td>
                    </tr>

                    <tr class="odd">

                        <td width="5%">111</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00100&amp;mCos_Class=A&amp;mSmtr=0952')"> (大學日間部      )電腦圖學【第095學年第2學期：A班】<br>介紹計算機圖學的相關原理與演算法，除了講述電腦圖學的基礎知識外，更著重在演算法的使用以及程式的寫作技巧，以啟發學生的思考，培養學生對於3D電腦圖學的興趣及其獨立研究與應用的能力。</a>
                        </td>
                    </tr>

                    <tr>

                        <td width="5%">112</td>
                        <td>
                            <a href="#" onclick="window.open('http://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=64U00090&amp;mCos_Class=A&amp;mSmtr=0952')"> (大學日間部      )機率【第095學年第2學期：A班】<br>As a required course, the major objective of this course is to give a careful presentation of the fundamentals in probability theory, deal with basic probability as well as discrete and continuous random variables, introduce discrete and continuous distributions with illustrations of their use and relationships among them, present fundamental sampling distributions and data description, and propose one- and two-sample estimation problems. Students can have a proper understanding of the subject matter and confidence in applying probability theory to practical problem solving.</a>
                        </td>
                    </tr>

                    </tbody></table>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</div>

<?php footer() ?>
</body>
</html>

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
            <?php navbar(6) ?>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-6 text-left">
            <div class="entry">
                <button type="submit"><a href="genpdf.php">下載pdf</a></button>
                <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                    <tbody><tr class="odd">
                        <td width="5%">1</td>
                        <td>102學年度績優職涯導師，本校，2014.10.1</td>
                    </tr>
                    <tr>
                        <td width="5%">2</td>
                        <td>103年度第1次學術研究獎勵，本校，2014.07.31</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">3</td>
                        <td>102年度第2次學術研究獎勵，本校，2014.03.15</td>
                    </tr>
                    <tr>
                        <td width="5%">4</td>
                        <td>產學合作績優獎，本校，2013.12.20</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">5</td>
                        <td>2013年第23次ITSA線上程式設計大賽，教育部，2013.06.26</td>
                    </tr>
                    <tr>
                        <td width="5%">6</td>
                        <td>學術研究表現卓越獎，本校，2013.03.13</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">7</td>
                        <td>學術研究於期刊論文類表現卓越獎，本校，2013.03.13</td>
                    </tr>
                    <tr>
                        <td width="5%">8</td>
                        <td>學術研究於期刊論文類表現卓越獎，本校，2012.03.17</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">9</td>
                        <td>傑出教學獎，本校，2010.03.21</td>
                    </tr>
                    <tr>
                        <td width="5%">10</td>
                        <td>學術研究表現卓越獎，本校，2009.03.21</td>
                    </tr>
                    <tr class="odd">
                        <td width="5%">11</td>
                        <td>研究專題競賽佳作獎，本校，2009.03.21</td>
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

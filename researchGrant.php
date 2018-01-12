<?php
include("fun.inc.php");
include ("db_connect.php");
session_start();
$sql = "SELECT * from researchGrant";
$result = mysqli_query($link,$sql);
//$row = @mysqli_fetch_row($result);
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
        <div class="col-sm-12 text-left">
            <div class="entry">
                <button type="submit"><a href="genpdf.php">下載pdf</a></button>
                <?php if ($_SESSION['account'] != null) {
                    ?>
                    <button type="submit"><a href="researchGrantAdd.php">新增</a></button>
                    <?php
                }
                ?>
                <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                    <tbody>
                    <?php
                    $count=1;
                    while($row = @mysqli_fetch_row($result)) {
                        if ($count % 2 == 1) {
                            ?>
                            <tr class="odd">
                                <td width="5%"><?php echo $count; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <?php
                                if ($_SESSION['account'] != null) {
                                    echo "<form name=\"form\" method=\"post\" action=\"researchGrantEdit.php\">";
                                    echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                                    echo "<input type=\"hidden\" name=\"content\" value=\"$row[1]\" />";
                                    echo "<td align=\"right\"><button class='edit' type=\"submit\">修改</button></td>";
                                    echo "</form>";
                                    ?>
                                    <?php
                                    echo "<form name=\"form\" method=\"post\" action=\"researchGrantDelete_finish.php\">";
                                    echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                                    echo "<td align=\"right\"><button class='delete' type=\"submit\" onclick=\"return confirm('第'+$count+'筆資料確定要刪除嗎? 刪除後無法復原!!')\">刪除</button></td>";
                                    echo "</form>";
                                }
                                ?>
                            </tr>
                            <?php $count++;
                        } else {
                            ?>
                            <tr>
                                <td width="5%"><?php echo $count; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <?php
                                if ($_SESSION['account'] != null) {
                                    echo "<form name=\"form\" method=\"post\" action=\"researchGrantEdit.php\">";
                                    echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                                    echo "<input type=\"hidden\" name=\"content\" value=\"$row[1]\" />";
                                    echo "<td align=\"right\"><button class='edit' type=\"submit\">修改</button></td>";
                                    echo "</form>";
                                    ?>
                                    <?php
                                    echo "<form name=\"form\" method=\"post\" action=\"researchGrantDelete_finish.php\">";
                                    echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                                    echo "<td align=\"right\"><button class='delete' type=\"submit\" onclick=\"return confirm('第'+$count+'筆資料確定要刪除嗎? 刪除後無法復原!!')\">刪除</button></td>";
                                    echo "</form>";
                                }
                                ?>
                            </tr>
                            <?php $count++;
                        }
                    }
                    ?>
                    </tbody></table>

            </div>
        </div>
    </div>
</div>

<?php footer() ?>
</body>
</html>

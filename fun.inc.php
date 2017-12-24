<?php function head(){
    ?>
    <link rel="stylesheet" href="css/styleT.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <?php
}
?>
<?php
include("db_connect.php");
function navbar($flag){
?>
    <ul class="nav navbar-nav">
    <?php
        if($_SESSION['account'] != null)
        {
    ?>
            <li <?php if($flag==0) echo "class='active'";?>><a href="admindex.php"><i class="fa fa-cog" aria-hidden="true"></i>控制台</a></li>
    <?php
        }
        ?>
        <li <?php if($flag==1) echo "class='active'";?>><a href="indexT.php"><i class="fa fa-home" aria-hidden="true"></i>首頁</a></li>
<li <?php if($flag==2) echo "class='active'";?>><a href="vita.php"><i class="fa fa-address-card" aria-hidden="true"></i>簡歷</a></li>
<li <?php if($flag==3) echo "class='active'";?>><a href="journalPapers.php"><i class="fa fa-list" aria-hidden="true"></i>期刊論文</a></li>
<li <?php if($flag==4) echo "class='active'";?>><a href="conferencePapers.php"><i class="fa fa-list-ul" aria-hidden="true"></i>研討會論文</a></li>
<li <?php if($flag==5) echo "class='active'";?>><a href="researchGrant.php"><i class="fa fa-handshake-o" aria-hidden="true"></i>研究計畫</a></li>
<li <?php if($flag==6) echo "class='active'";?>><a href="awards.php"><i class="fa fa-trophy" aria-hidden="true"></i>獲獎</a></li>
<li <?php if($flag==7) echo "class='active'";?>><a href="courseInformation.php"><i class="fa fa-university" aria-hidden="true"></i>授課課程</a></li>
<li <?php if($flag==8) echo "class='active'";?>><a href="thesisAdvisor.php"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i>指導論文</a></li>
<li <?php if($flag==9) echo "class='active'";?>><a href="collegeStudentParticipationinResearchProjects.php"><i class="fa fa-hand-o-up" aria-hidden="true"></i>指導大專生計畫</a></li>
</ul>
    <ul class="nav navbar-nav navbar-right">
        <?php
        if($_SESSION['account'] != null)
        {
            echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
        }
        else
        {
           echo '<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
        }
        ?>

    </ul>
<?php
}
?>

<?php
function footer(){
    ?>
<footer class="container-fluid text-center">
    <p>亞洲大學 教師EPORTFOLIO∣台中市霧峰區柳豐路500號 郵遞區號:41354∣04-23323456</p>
    <p>Powered by Tank</p>
</footer>
<?php
}
?>
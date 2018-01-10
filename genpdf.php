<?php
require('fpdf181/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
$sql = "SELECT * from awards";
$result = mysqli_query($link,$sql);
//$row = @mysqli_fetch_row($result);
?>
<table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
    <tbody>
    <?php
    $count=1;
    while($row = @mysqli_fetch_row($result)) {
        if ($count % 2 == 1) {
            ?>
            <tr class="odd">
                <td width="8%"><?php echo "(編號:".$row[0].")<br>".$count; ?></td>
                <td><?php echo $row[1]; ?></td>
            </tr>
            <?php $count++;
        } else {
            ?>
            <tr>
                <td width="8%"><?php echo "(編號:".$row[0].")<br>".$count; ?></td>
                <td><?php echo $row[1]; ?></td>
            </tr>
            <?php $count++;
        }
    }
    ?>
    </tbody></table>

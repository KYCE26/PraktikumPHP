<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penggunaan Kontrol For</title>
</head>
<body>
    <h2>Penggunaan kontrol For</h2>
    <b>Nama Bulan :</b><br>
    <?php
    $bulan=array("januari","Februari","maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    for($i=0;$i<count($bulan);$i++)
    {
        echo(($i+1) ." $bulan[$i] <br>");
    }
    ?>
</body>
</html>
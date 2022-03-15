<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .profil{
            color: red;
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>
    <div class="profil">
        <?php
            define("NAMA","ZUL HISYAM");
            $umur = (int)26;
            $gaji = (double)2500000;

            echo "Nama Saya Adalah ".NAMA;
            echo "<br>Umur Saya ".$umur." Tahun";
            echo "<br>Saya Bekerja dengan Gaji Rp.".$gaji;
        ?>
    </div>
</body>
</html>
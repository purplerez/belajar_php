<?php
include '../class/OperasiAritmatika.php';
include '../class/LuasBangunDatar.php';

use LuasBangunDatar\LuasBangunDatar;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $luas = new LuasBangunDatar();
    ?>

    Hitung Luas Lingkaran dengan jari - jari 10<br/>
    <?php
        echo $luas->luasLingkaran(10);
    ?>
</body>
</html>

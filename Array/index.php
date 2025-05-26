<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Menginputkan data ke Array
    // Metode 1
        
    $data[0] = "PPLG";
    $data[1] = "DKV";
    $data[2] = "PM";
    $data[3] = "AKL";

    echo $data[0];
?>
    <h3> <?= $data[1] ?></h3>



    <table border=1>
        <tr>
            <td>JURUSAN</td>
        </tr>
<?php
    // metode 2 input array tanpa index
        $data[] = "PH";
        $data[] = "BCF";
        $data[] = "SP";
        $data[] = "KL";
    
       foreach($data as $value) {
    ?>
        <tr>
            <td>
                <?= $value ?>
            </td>
        </tr>
        
    <?php } ?>

    </table>

    <?php

        $barang = ['sabun', 'pasta gigi', 'sikat gigi', 'shampoo'];

        for($i = 0; $i < count($barang); $i++){
            echo $barang[$i].'<br/>';
        }



?>
    


</body>
</html>

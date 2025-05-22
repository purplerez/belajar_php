<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td, tr {
            border : solid 1px black;
            margin : 0;
        }
    </style>
</head>
<body>
<?php
    $baris = 20;
    $kolom = 2;

?>

    <table style="width:70%;">
    <?php
        for($i = 1; $i <= $baris; $i++)
        {
    ?>
    <tr>
        <?php
            for($x = 1; $x <= $kolom; $x++){
        ?>
            <td> &nbsp; </td>
        <?php } ?>

    </tr>
    <?php
        }
    ?>

    </table>
</body>
</html>
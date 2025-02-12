<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  </head>
<body>
    <form action="" method="post" class="form">
        <table>
            <tr>
                <td>Baris </td>
                <td>: </td>
                <td><input type="number" name="baris" id="" /></td>
            </tr>
            <tr>
                <td>Kolom </td>
                <td>: </td>
                <td><input type="number" name="kolom" id="" /></td>
            </tr>
            <tr>
                <td colspan=3>
                    <input type="submit" value="Run" name="btnRun">
                </td>
            </tr>
        </table>
    </form>



    <?php
        if(isset($_POST['btnRun'])){
            $baris = $_POST['baris'];
            $kolom = $_POST['kolom'];

            ?>

            
            <table border=1 style="width:75%;">
                <?php
                    for($i=1; $i <= $baris; $i++) {
                ?>
                <tr>
                    <?php
                        for($y = 1; $y <= $kolom; $y++) {
                    ?>
                        <td>
                                &nbsp;
                        </td>
                    <?php
                            }
                    ?>
                </tr>
                <?php } ?>
            </table>





    <?php
        }


    ?>






    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
 

</body>
</html>
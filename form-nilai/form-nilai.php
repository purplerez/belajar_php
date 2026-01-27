<?php
session_start();
include "./config/data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col12 ">
            <h2 class="text-center">Form Nilai Siswa</h2>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nis" class="form-label">Nomor Induk Siswa:</label>
                        <input class="form-control" type="text" id="nis" name="nis" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap:</label>
                        <input  class="form-control" type="text" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="bin" class="form-label">Nilai BIN:</label><br>
                        <input type="number" class="form-control" id="bin" name="bin" pattern="{10,15}" placeholder="Contoh : 78" required>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Nilai MTK:</label><br>
                        <input type="number" class="form-control" id="mtk" name="mtk" pattern="{10,15}" placeholder="Contoh : 78" required>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Nilai BING:</label><br>
                        <input type="number" class="form-control" id="bing" name="bing" pattern="{10,15}" placeholder="Contoh : 78" required>
                    </div>
                    <div class="mb-3">
                        <label for="pro" class="form-label">Nilai PRO:</label><br>
                        <input type="number" class="form-control" id="pro" name="pro" pattern="{10,15}" placeholder="Contoh : 78" required>
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Kirim" name="btnInputNilai" >
                    </div>
                </form>
        </div>
    </div>
</div>
    
<table style="width : 50%; margin : 20px; border : solid 1px black; border-collapse : collapse; text-align : center;" border="1">
    <thead>
        <tr>
            <th>No. </th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>BIN</th>
            <th>BING</th>
            <th>MTK</th>
            <th>PRO</th>
            <th>Rata</th>
            <th>Menu</th>
        </tr>
    </thead>
    <tbody>
    <?php
        if(isset($_SESSION['nilai'])){
        $no = 0;
        $ratabin = 0;
        $ratamtk = 0;
        $ratabing = 0;
        $ratapro = 0;
        foreach($_SESSION['nilai'] as $nilai){
            $no++;
            $ratabin += $nilai['bin'];
            $ratamtk += $nilai['mtk'];
            $ratabing += $nilai['bing'];
            $ratapro += $nilai['pro'];
    ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $nilai['nis'] ?></td>
            <td><?= $nilai['nama'] ?></td>
            <td><?= $nilai['bin'] ?></td>
            <td><?= $nilai['bing'] ?></td>
            <td><?= $nilai['mtk'] ?></td>
            <td><?= $nilai['pro'] ?></td>
            <td><?= $nilai['rata'] ?></td>
            <td><a href="edit.php?editNis=<?= $nilai['nis'] ?>">Edit</a> | <a href="?deleteNis=<?= $nilai['nis'] ?>">Delete</a></td>
        
        </tr>
    <?php
            
        }
    }
    else {
        echo "<tr><td colspan=8 class='text-center'>Tidak ada data nilai</td></tr>";
    }
    ?>
    <!-- memberi rata - rata pada masing - masing mata pelajaran -->
    <?php if($no > 0) { ?>
        <tr>
            <td colspan=3>Rata - Rata </td>
            <td><?= round($ratabin/$no, 2) ?></td>
            <td><?= round($ratamtk/$no, 2) ?></td>
            <td><?= round($ratabing/$no, 2) ?></td>
            <td><?= round($ratapro/$no, 2) ?></td>
            <td>&nbsp;</td>
        </tr>
    <?php } ?>
</tbody>
</table>
</body>
</html>

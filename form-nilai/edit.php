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
                        <input class="form-control" type="text" id="nis" name="nis" value="<?= $dataEdit['nis'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap:</label>
                        <input  class="form-control" type="text" id="nama" name="nama"  value="<?= $dataEdit['nama'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="bin" class="form-label">Nilai BIN:</label><br>
                        <input type="number" class="form-control" id="bin" name="bin" pattern="{10,15}" placeholder="Contoh : 78" required value="<?= $dataEdit['bin'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Nilai MTK:</label><br>
                        <input type="number" class="form-control" id="mtk" name="mtk" pattern="{10,15}" placeholder="Contoh : 78" required value="<?= $dataEdit['mtk'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Nilai BING:</label><br>
                        <input type="number" class="form-control" id="bing" name="bing" pattern="{10,15}" placeholder="Contoh : 78" required value="<?= $dataEdit['bing'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="pro" class="form-label">Nilai PRO:</label><br>
                        <input type="number" class="form-control" id="pro" name="pro" pattern="{10,15}" placeholder="Contoh : 78" required value="<?= $dataEdit['pro'] ?>">
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Kirim" name="btnEditNilai" >
                    </div>
                </form>
        </div>
    </div>
</div>
</body>
</html>
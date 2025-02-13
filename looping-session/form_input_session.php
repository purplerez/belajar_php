<?php
session_start();
include_once "proses.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absensi Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<div class="container-fluid">
    <div class="row">
        <div class="col-10">
            <form method="post" action="" >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Absensi</label>
                    <select name="ket" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Hadir</option>
                        <option value="2">Izin</option>
                        <option value="3">Tanpa Keterangan</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary" name="btnAbsensi">Submit</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Waktu</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    $ket = [1 => 'Hadir', 2=> 'Izin', 3 => 'Tanpa Keterangan'];
        foreach ($_SESSION['absen'] as $absen){
    ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $absen['nama'] ?></td>
      <td><?= $ket[$absen['ket']] ?></td>
      <td><?= $absen['waktu'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
        </div>
    </div>
</div>
  
    






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

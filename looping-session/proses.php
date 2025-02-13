<?php
if(!isset($_SESSION['absen'])){
    $_SESSION['absen'] = [];
}

if(isset($_POST['btnAbsensi'])){
    $nama = $_POST['nama'];
    $absen = $_POST['ket'];
    
    $_SESSION['absen'][] = [
        'nama' => $nama,
        'ket' => $absen,
        'waktu' => date('d-m-Y h:i:s')
    ];
}

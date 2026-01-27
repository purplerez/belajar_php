<?php

if(!isset($_SESSION['nilai'])) {
    $_SESSION['nilai'] = [];
}

if(isset($_GET['editNis'])) {
    $editNis = $_GET['editNis'];
    // cari data yang akan diedit
    foreach($_SESSION['nilai'] as $key => $nilai){
        if($nilai['nis'] == $editNis){
            $dataEdit = $nilai;
            $dataKey = $key;
            break;
        }
    }
    // var_dump($dataEdit);
    // var_dump($dataKey);
}

if(isset($_GET['deleteNis'])) {
    $deleteNis = $_GET['deleteNis'];
    // cari data yang akan dihapus
    foreach($_SESSION['nilai'] as $key => $nilai){
        if($nilai['nis'] == $deleteNis){
            unset($_SESSION['nilai'][$key]);

            $_SESSION['nilai'] = array_values($_SESSION['nilai']);
            break;
        }
    }
    header("location:form-nilai.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['btnInputSiswa'])){
        $nis = htmlspecialchars($_POST['nis']);
        $nama = htmlspecialchars($_POST['nama']);
        $tempat = htmlspecialchars($_POST['tempat']);
        $tgl = htmlspecialchars($_POST['tanggal']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $gender = htmlspecialchars($_POST['gender']);
        $telp = htmlspecialchars($_POST['telp']);
        $kelas = htmlspecialchars($_POST['kelas']);
        $jur = htmlspecialchars($_POST['jurusan']);
        $hobi = implode(",", $_POST['hobi']);

        // echo "NIS = $nis <br/>
        // Nama = $nama <br/>
        // Tempat/Tgl Lahir = $tempat / ".date("l, dS F Y ", strtotime($tgl))." <br/>
       
        // Alamat = $alamat <br/>
        // Gender = $gender <br/>
        // Telp = $telp <br/>
        // Kelas = $kelas <br/>
        // Jurusan = $jur <br/>
        // Hobi = $hobi";
    }
    elseif(isset($_POST["btnInputNilai"])){
        $nis = htmlspecialchars($_POST['nis']);
        $nama = htmlspecialchars($_POST['nama']);
        $bin = $_POST['bin'];
        $bing = $_POST['bing'];
        $mtk = $_POST['mtk'];
        $pro = $_POST['pro'];

       
        $rata2 = ($bin + $bing + $mtk + $pro)/ 4;

       
        $_SESSION['nilai'][] = [
                'nis' => $nis,
                'nama' => $nama,
                'bin' => $bin,
                'bing' => $bing,
                'mtk' => $mtk,
                'pro' => $pro,
                'rata' => $rata2
        ];
    }
    elseif(isset($_POST["btnEditNilai"])){
        $nis = htmlspecialchars($_POST['nis']);
        $nama = htmlspecialchars($_POST['nama']);
        $bin = $_POST['bin'];
        $bing = $_POST['bing'];
        $mtk = $_POST['mtk'];
        $pro = $_POST['pro'];
       
        $rata2 = ($bin + $bing + $mtk + $pro)/ 4;

        $_SESSION['nilai'][$dataKey] = [
                'nis' => $nis,
                'nama' => $nama,
                'bin' => $bin,
                'bing' => $bing,
                'mtk' => $mtk,
                'pro' => $pro,
                'rata' => $rata2
        ];
        header("location:form-nilai.php");
    }
}
// else {
//     header("location:../index.php");
// }



/*

FILTERING

1. dengan memfilter nama dari elemen tombol
if(isset($_POST['btnInput'])) {
statement;

}

2. dengan variabel Server
if($_SERVER["REQUEST_METHOD"] == "POST") {
statement;
}

*/

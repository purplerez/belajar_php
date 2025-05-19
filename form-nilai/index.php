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
            <h2 class="text-center">Form Biodata Siswa</h2>
                <form action="./config/data.php" method="get">
                    <div class="mb-3">
                        <label for="nis" class="form-label">Nomor Induk Siswa:</label>
                        <input class="form-control" type="text" id="nis" name="nis" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap:</label>
                        <input  class="form-control" type="text" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tempat / Tanggal Lahir:</label><br>
                        <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat" required>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label><br>
                        <textarea id="alamat" class="form-control" name="alamat" rows="4" cols="50" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="gender"  class="form-label">Gender:</label><br>
                        <input type="radio"  class="form-check-input" id="laki" name="gender" value="L" required>
                        <label for="laki" class="form-check-label" >Laki-laki</label>
                        <input type="radio" class="form-check-input" id="perempuan" name="gender" value="P">
                        <label for="perempuan" class="form-check-label" >Perempuan</label>
                    </div>

                    <div class="mb-3">
                        <label for="telp" class="form-label">No. Telp:</label><br>
                        <input type="tel" class="form-control" id="telp" name="telp" pattern="{10,15}" placeholder="Contoh: 081234567890" required>
                    </div>

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas:</label><br>
                        <select  class="form-select" id="kelas" name="kelas" required>
                        <option value="">-- Pilih Kelas --</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan:</label><br>
                        <select id="jurusan" name="jurusan" required class="form-select">
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
                        <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
                        <option value="DKV">Desain Komunikasi Visual</option>
                        <option value="SP">Seni Pertunjukan</option>
                        <option value="AKL">Akuntansi Keuangan Lembaga</option>
                        <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis</option>
                        <option value="PH">Perhotelan</option>
                        <option value="PM">Pemasaran</option>
                        <option value="BDP">Broadcasting & Perfilman</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="hobi"  class="form-label">Hobi</label><br>
                        <input type="checkbox" class="form-check-input" name="hobi[]" id="" value="Renang"> <label for="hobi" class="form-check-label">Renang</label>
                        <input type="checkbox" class="form-check-input" name="hobi[]" id="" value="Lari"> <label for="hobi" class="form-check-label" >Lari</label>
                        <input type="checkbox" class="form-check-input" name="hobi[]" id="" value="Membaca"> <label for="hobi" class="form-check-label" >Membaca</label>
                        <input type="checkbox" class="form-check-input" name="hobi[]" id="" value="Traveling"> <label for="hobi" class="form-check-label" >Traveling</label>
                        <input type="checkbox" class="form-check-input" name="hobi[]" id="" value="Game"> <label for="hobi" class="form-check-label" >Game</label>
                        <input type="checkbox" class="form-check-input" name="hobi[]" id="" value="Tidur"> <label for="hobi" class="form-check-label" >Tidur</label>
                        <input type="checkbox" class="form-check-input" name="hobi[]" id="" value="Bersepeda"> <label for="hobi" class="form-check-label" >Bersepeda</label>
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Kirim" name="btnInputSiswa" >
                    </div>
                </form>
        </div>
    </div>
</div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $barang = [
            'nama' => 'Sabun',
            'harga' => '3500',
        ];

        echo $barang['nama'].'<br/>';
        echo $barang['harga'];

    ?>





    <?php
        $siswa = [
            [
                'no' => 1,
                'nama' => 'Alvin',
                'absen' => 1,
                'bin' => 70,
                'bing' => 80,
                'mat' => 87,
                'pro' => 86
            ],
            [
                'no' => 2,
                'nama' => 'Akhsay',
                'absen' => 1,
                'bin' => 70,
                'bing' => 80,
                'mat' => 87,
                'pro' => 86
            ],
            [
                'no' => 3,
                'nama' => 'Ellena',
                'absen' => 1,
                'bin' => 70,
                'bing' => 80,
                'mat' => 87,
                'pro' => 86
            ],
            [
                'no' => 4,
                'nama' => 'Amanda',
                'absen' => 2,
                'bin' => 70,
                'bing' => 80,
                'mat' => 87,
                'pro' => 86
            ],
            [
                'no' => 5,
                'nama' => 'Dika',
                'absen' => 3,
                'bin' => 70,
                'bing' => 80,
                'mat' => 87,
                'pro' => 86
            ],
        ];

       
    ?>

    <table border=1>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Absen</td>
            <td>BIN</td>
            <td>BING</td>
            <td>MAT</td>
            <td>PRO</td>
            <td>RATA</td>
        </tr>
        <?php
            foreach($siswa as $d) {
                $rata = ($d['bin'] + $d['bing'] + $d['mat'] + $d['pro']) / 4;
        ?>
        <tr>
            <td><?= $d['no'] ?></td>
            <td><?= $d['nama'] ?></td>
            <td><?= $d['absen'] ?></td>
            <td><?= $d['bin'] ?></td>
            <td><?= $d['bing'] ?></td>
            <td><?= $d['mat'] ?></td>
            <td><?= $d['pro'] ?></td>
            <td><?= $rata ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
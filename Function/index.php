<?php

function tambah($a, $b){
    $c = $a + $b;

    echo $c;
}

function kali($a, $b){
    // $c = $a * $b;

    return $a * $b;
}

function cetak($string, $jumlah = 1){
    for($i = 1; $i <= $jumlah; $i++)
    {
        echo $string.'<br/>';
    }
}


// metode jual nasi yang ngeracik
// for($i = 1; $i <= 100; $i++)
//     echo "PPLG <BR/>";

//     for($i = 1; $i <= 50; $i++)
//     echo "smkn 1 Banyuwangi <BR/>";

// tambah(12,7 );

// $perkalian = kali(12, 7); 

// metode jual nasi bungkus
cetak('x pplg 1', 10 );



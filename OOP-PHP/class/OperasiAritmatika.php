<?php

namespace OperasiAritmatika;

class OperasiAritmatika{
    public $bil1;
    public $bil2;

    public function tambah(){
        return $this->bil1 + $this->bil2;
    }

    public function kali(){
        return $this->bil1 * $this->bil2;
    }

    public function pangkat2($bil){
        return $bil*$bil;
    }

}

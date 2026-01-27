<?php

namespace LuasBangunDatar;

use OperasiAritmatika\OperasiAritmatika;

class LuasBangunDatar extends OperasiAritmatika {

    public function luasLingkaran($jari):float
    {
        $phi = 3.14;

        return $phi * $this->pangkat2($jari);
    }


}

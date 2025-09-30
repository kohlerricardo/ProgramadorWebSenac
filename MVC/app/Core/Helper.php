<?php
namespace App\Core;
use App\config\defines;
class Helper {

    public static function gerarUrl($rota = '') {
        return BASE_PATH . $rota;
    }

    public static function gerarUrlLocal($rota ='') {
        return BASE_PATH2 . $rota;
    }
}
?>
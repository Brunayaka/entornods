<?php
namespace Dwes\Galaxiaenana;

const RADIO = 35; // millones de km

function observar($nombre){
    echo "<br>Mirando a : $nombre";
}


class galaxia{

    function __construct()
    {
        $this->nacer();
    }

    function nacer(){
        echo "<br>Nueva galaxia en camino";
    }

    static function muerte(){
        echo "<br>Galaxia destruyendose en 3 2 1...";
    }

}// fin_clase
<?php
namespace Dwes;

const RADIO = 126.88; // millones de km

function observar($nombre){
    echo "<br>Observando la galaxia: $nombre";
}

function time(){
    echo "<br>Me quedan 542735892789237983424 años de vida";
}

class galaxia{

    function __construct()
    {
        $this->nacer();
    }

    function nacer(){
        echo "<br>Hola! , soy una nueva Galaxia!";
    }

    static function muerte(){
        echo "<br>Me estoy muriendo ...";
    }


}// fin_clase
<?php
namespace Dwes;

require "galaxia.php";
require "galaxiaenana/galaxiaenana.php";

echo "Namespace ACTUAL: " . __NAMESPACE__;

echo "<h2>Acceso sin cualificar</h2>"; // clases del mismo paquete

observar("Via Lactea");

echo "<br>El radio es: " . RADIO;

$gl = new galaxia();

galaxia::muerte();


echo "<h2>Acceso cualificado</h2>"; // acceso absoluto desde mi ubicacion
Galaxiaenana\observar("Los 3 Pilares");

echo "<br>El radio es: " . Galaxiaenana\RADIO;
$gl = new Galaxiaenana\galaxia();
Galaxiaenana\galaxia::muerte();


echo "<h2>Acceso Totalmente cualificado</h2>"; // acceso absoluto desde la raiz
Galaxiaenana\observar("NGC 5709");

echo "<br>El radio es: " . \Dwes\Galaxiaenana\RADIO;
$gl = new \Dwes\Galaxiaenana\galaxia();
\Dwes\Galaxiaenana\galaxia::muerte();

// Importar la clase : comando use
use function \Dwes\Galaxiaenana\observar;
use const \Dwes\Galaxiaenana\RADIO;

echo "<h2>Importar con use</h2>";

observar("Otra galaxia");
echo "<br>El radio es " . RADIO;


echo "<h2>Apodar / Alias namespace</h2>";
use function \Dwes\Galaxiaenana\observar as mirar;
mirar("cometa halley");

echo "<h2>Namespace GLOBAL</h2>";
echo time();
echo "<hr>";
echo "<br>Hora actual : " . \time();

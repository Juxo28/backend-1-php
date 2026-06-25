<?php 

require_once "../class/Persona.php";

$julian = new Persona();

$julian->saludar();
$julian->jugar();
echo "<br><br>";

require_once "../class/Animal.php";

$mascota = new Perro ();
$mascota->ladrar();
echo "<br>";
$mascota->dormir();
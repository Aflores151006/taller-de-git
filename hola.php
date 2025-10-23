<?php
// Autor: Manuel Paniagua <mpaniagua@iestrassierra.com>
// El nombre por defecto es Mundo
require('HolaMundo.php');
print "Introduce tu nombre";
$nombre = trim(fgets(STDI));
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
print new HolaMundo($nombre);

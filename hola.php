<?php
// Autor: Manuel Paniagua <mpaniagua@iestrassierra.com>
// El nombre por defecto es Mundo
require('HolaMundo.php');
print "Introduce tu nombre";
$nombre = trim(fgets(STDI));
print new HolaMundo($nombre);

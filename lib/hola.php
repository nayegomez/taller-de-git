<?php
// El autor es: Náyeli <nayeligomezmoyano@gmail.com>
// El nombre por defecto es mundo
require('HolaMundo.php');

$nombre = isset($rgv[1]) ? $argv[1] : "Mundo";
@print new HolaMundo($nombre);
?>

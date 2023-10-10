<?php
// El nombre por defecto es mundo
$nombre = isset($rgv[1]) ? $argv[1] : "Mundo";
@print "Hola {$argv[1]}\n"; // el @ es para que no tire errores en la web
?>

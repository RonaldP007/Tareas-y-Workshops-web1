<?php

if ($argc < 3) {
    echo "No cumple con los parametros necesarios";
    exit;
}

$filename = $argv[1];
$txt = $argv[2];
$lista = array();

if (($gestor = fopen($filename, "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {       
        array_push($lista,$datos[0] . $datos[1] . " vive en" . $datos[3] . "y su numero de es:" . $datos[2] . "\r\n");
    }
}

$archivo_txt = fopen($txt, "w");
for($i = 1; $i < count($lista); $i++){
    echo $lista[$i];
    fwrite($archivo_txt, $lista[$i]);
}
echo "Se ha copia la informacion";
//$close($gestor);
//$close($archivo_txt);

?>
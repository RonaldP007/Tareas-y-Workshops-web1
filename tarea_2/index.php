<?php
if (($gestor = fopen("products.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        $numero = count($datos);
        $contador = 0;
        for ($c=0; $c < $numero; $c++) {
            echo $datos[$c];
            if($contador >4){
                echo "\n ";
                $contador =0;
            }else{
                echo "\t";
                $contador++;
            }
        }
    }
    fclose($gestor);
}
?>
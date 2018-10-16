<?php

include "Student.php";

$option = $argv[1];
/*$id = $argv[2];
$name = $argv[3];
$last = $argv[4];
$mail = $argv[5];*/


/*
function nuevo_est(){
    $persona = new Student($argv[1], $argv[2], $argv[3], $argv[4]);
    $persona ->insert();
}


function update(){
    $persona = new Student( $argv[1], $argv[2], $argv[3], $argv[4]);
    $persona -> update();
}

function delete(){
    $persona = new Student( $argv[1]);
    $persona -> delete();
}*/

switch($option){
	case 'C':
        $persona = new Student($argv[2], $argv[3], $argv[4], $argv[5]);
        $persona ->insert();
	    break;

	case 'U':
        $persona = new Student( $argv[2], $argv[3], $argv[4], $argv[5]);
        $persona -> update();
        break;
    
    case 'D':

        $persona = new Student( $argv[2], null, null, null);
        $persona -> delete();
        break;

	default:
		echo "opcion incorrecta";
	    break;
}


?>
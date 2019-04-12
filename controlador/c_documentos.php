<?php
require_once('../modelo/documentos.php');

$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

// print_r($_FILES);
$opcion= $_REQUEST['opcion'];

switch ($opcion) {
    case 'subir':
        $documento= new documentos($nombre,$guardado);
        $resultado= $documento->subir();
                
        break;
    
    default:
        # code...
        break;
}
<?php
$nombre= $_REQUEST['nombre'];
$apellido= $_REQUEST['apellido'];
$fecha_nacimiento= $_REQUEST['fecha_nacimiento'];
$direccion= $_REQUEST['direccion'];
$telefono= $_REQUEST['telefono'];

$opcion= $_REQUEST['opcion'];

switch ($opcion) {
  case 'registrar':
    $persona= new personas($nombre,$apellido,$fecha_nacimiento,$direccion,$telefono);
    $resultado= $persona->registrar();

    break;

  case 'listar':
    // code...
    break;

  case 'actualizar':
    // code...
    break;

  case 'eliminar':
    // code...
    break;

  default:
    // code...
    break;
}

?>

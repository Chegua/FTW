<?php
require_once 'DataBase.php';
class personas
{
  // foto-cedula
  private $nombre;
  private $apellido;
  private $fecha_nacimiento;
  private $direccion;
  private $telefono;


  function __construct($nom="", $ape="", $fn="", $dire="", $tlf="")
  {
    $this->nombre= $nom;
    $this->apellido= $ape;
    $this->fecha_nacimiento= $fn;
    $this->direccion= $dire;
    $this->telefono= $tlf;
  }

  public function registrar()
  {

    try {
      $db= DataBase::getInstance();
      $consulta= $db->prepare("INSERT INTO personas(nombre, apellido, fecha_nacimiento, direccion, telefono) VALUES (:nombre,:apellido,:fecha_nacimiento,:direccion,:telefono)");
      $consulta->bindParam(':nombre',$this->nombre);
      $consulta->bindParam(':apellido',$this->apellido);
      $consulta->bindParam(':fecha_nacimiento',$this->fecha_nacimiento);
      $consulta->bindParam(':direccion',$this->direccion);
      $consulta->bindParam(':telefono',$this->telefono);

      return $consulta->execute();

    } catch (\Exception $e) {
      $resultado=false;

		  throw new Exception($e->getMessage(), $e->getCode());
    }

  }

  public function listar($value='')
  {
    try {
      $db= DataBase::getInstance();
      $consulta= $db->prepare("SELECT *FROM personas");


    } catch (\Exception $e) {
      throw new \Exception($e->getMessage(), $e->getCode());


    }

  }

  public function actualizar($value='')
  {
    // code...
  }

  public function eliminar($value='')
  {
    // code...
  }
}


?>

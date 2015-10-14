<?php
require("conexion.php");
class Estudiante {
      var $consulta;
      function Estudiante($cedula)
      {
      $c = Conexion::getConexion();
      $this->consulta=$c->query("select CEDULA,PRIMAPELLIDO,SDOAPELLIDO,NOMBREPILA,MATERIA,NOMBRELARGO,count(*) as veces from NOTAS where CEDULA='$cedula' GROUP BY CEDULA,PRIMAPELLIDO,SDOAPELLIDO,NOMBREPILA,MATERIA,NOMBRELARGO");
      }

      function getConsulta()
      {
        return $this->consulta;
      }




}

?>

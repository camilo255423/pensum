<?php
require("conexion.php");
//



class Estudiante {
      var $cedula;
      var $conexion;
      var $CONSULTA_APROBADAS='select distinct CEDULA,PRIMAPELLIDO,SDOAPELLIDO,NOMBREPILA,MATERIA,NOMBRELARGO 
      from NOTAS where CEDULA=:CEDULA and NOTADEFIN>=3 and NOTADEFIN<=5';
      var $CONSULTA_REPROBADAS="select  MATERIA, NOMBRELARGO, count(*) as NUMERO_VECES
      from NOTAS where CEDULA =  :CEDULA and materia not in(
      SELECT materia
      FROM NOTAS
      WHERE CEDULA =  :CEDULA
      AND NOTADEFIN >=3 and NOTADEFIN<=5
      )
      group by MATERIA, NOMBRELARGO";
      var $CONSULTA_CURSANDO="SELECT MATERIA, NOMBRELARGO from NOTAS where NOTADEFIN=9.9 AND CEDULA=:CEDULA";


      function Estudiante($cedula)
      {
      $this->conexion = Conexion::getConexion();
      $this->cedula = $cedula;
      }

      function getAprobadas()
      {
          $sth = $this->conexion->prepare($this->CONSULTA_APROBADAS);
          $sth->execute(array(':CEDULA' => $this->cedula));
          $resultados=$sth->fetchAll();  
          $sth->closeCursor();
          
          return $resultados;    

      }
      function getReprobadas()
      {
          $sth = $this->conexion->prepare($this->CONSULTA_REPROBADAS);
          $sth->execute(array(':CEDULA' => $this->cedula));
          $resultados=$sth->fetchAll();  
          $sth->closeCursor();
          
          return $resultados;    
      }
        function getCursando()
      {
          $sth = $this->conexion->prepare($this->CONSULTA_CURSANDO);
          $sth->execute(array(':CEDULA' => $this->cedula));
          $resultados=$sth->fetchAll();  
          $sth->closeCursor();
          
          return $resultados;    
      }
/*
      select  MATERIA, NOMBRELARGO, count(*) as NUMERO_VECES
from NOTAS where CEDULA =  '1000047466' and materia not in(
SELECT materia
FROM NOTAS
WHERE CEDULA =  '1000047466'
AND NOTADEFIN >=3
)
group by MATERIA, NOMBRELARGO
*/



}

?>

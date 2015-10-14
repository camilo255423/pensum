<?php
$user="root";
$pass="root";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=pensum', $user, $pass);
   foreach($dbh->query('select CEDULA,PRIMAPELLIDO,SDOAPELLIDO,NOMBREPILA,MATERIA,NOMBRELARGO,count(*) as veces from NOTAS where CEDULA="96030801285" GROUP BY CEDULA,PRIMAPELLIDO,SDOAPELLIDO,NOMBREPILA,MATERIA,NOMBRELARGO') as $row) {
        //print_r($row);
        echo $row["veces"];
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

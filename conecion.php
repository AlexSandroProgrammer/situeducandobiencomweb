<?php

    $servidor="host3.latinoamericahosting.com";
    $usuario="educand1_adminsitu";
    $clave="SituLoQuieres001";
    
    $base="educand1_situ";
    $conectarBD = new mysqli($servidor,$usuario,$clave,$base) or die("error al conectar"
            . "la base de datos".mysql_error());
    mysqli_set_charset($conectarBD,"utf8");
   
  
    

?>

<?php

if(isset($_GET['nombre'])){
    $usuario = $_GET['nombre'];
    $edad = $_GET['edad'];

    echo "<p> Usuario: ". $usuario . "</p>";
    echo "<p>Edad: ". $edad. "</p>";
}

// url --> http://localhost/web2/clases/ejemploGet.php?nombre=agustina&edad=28

?>
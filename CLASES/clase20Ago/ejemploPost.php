<?php

if(isset($_POST['nombre'])){
    $usuario = $_POST['nombre'];
    $edad = $_POST['edad'];

    echo "<p> Usuario: ". $usuario . "</p>";
    echo "<p>Edad: ". $edad. "</p>";
}

// url --> http://localhost/web2/clases/ejemploPost.php

?>
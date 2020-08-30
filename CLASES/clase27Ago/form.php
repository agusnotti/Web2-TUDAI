
<?php

if(isset($_POST['nombre']) && isset($_POST['apellido'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    echo "<p>Nombre: ". $nombre . "</p>";
    echo "<p>Apellido: ". $apellido . "</p>";
}


// if(!empty($_POST)){
//     //print_r($_POST);
//     if(isset($_POST['nombre'])){           
//         $nombre = $_POST['nombre'];                      
//         echo "<p>Nombre: " . $nombre . "</p>";                      
//     }
//     if(isset($_POST['apellido'])){
//         $apellido = $_POST['apellido'];
//         echo "<p>Apellido: " . $apellido . "</p>";
//     }
// }
?>


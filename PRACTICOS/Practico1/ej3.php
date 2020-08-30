<?php

$mensajeError = "<p>Complete todos los campos.</p>";


//FORMULARIO POST
if(
    (isset($_POST['nombre']) && !empty($_POST['nombre'])) && 
    (isset($_POST['apellido']) && (!empty($_POST['apellido']))) && 
    (isset($_POST['edad'])&& (!empty($_POST['edad'])))
    ){    
    echo "Nombre: " . $_POST['nombre'] . "<br>";
    echo "Apellido: " . $_POST['apellido'] . "<br>";
    echo "Edad: " . $_POST['edad'] . "<br>";
} else {
    echo $mensajeError;
}

//FORMULARIO GET
if(
    (isset($_GET['nombre']) && !empty($_GET['nombre'])) && 
    (isset($_GET['apellido']) && (!empty($_GET['apellido']))) && 
    (isset($_GET['edad'])&& (!empty($_P_GETOST['edad'])))
    ){    
    echo "Nombre: " . $_GET['nombre'] . "<br>";
    echo "Apellido: " . $_GET['apellido'] . "<br>";
    echo "Edad: " . $_GET['edad'] . "<br>";
} else {
    echo $mensajeError;
}

?>
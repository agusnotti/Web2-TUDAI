<!-- 10. Modifique el ejercicio 3 para que el programa sea llamado mediante AJAX. -->

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

?>
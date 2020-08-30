<!-- 9. Modifique el ejercicio 3 para agregar elementos avanzados al formulario. Investigue
cómo se envían y reciben este tipo de datos:
a. Género (radiobutton - una sola opción)
b. País (select - una sola opción)
c. Intereses: (checkbox - selección múltiple) Investigue el uso de array en los
inputs. -->

<?php

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

// GENERO

if(isset($_POST['genero'])){
    $genero = $_POST['genero'];
    echo "<p>Genero: " . $genero;
}

// PAIS

if(isset($_POST['paises'])){
    $pais = $_POST['paises'];
    echo "<p>Pais: " . $pais;
}

// INTERESES
echo "<p>Intereses seleccionados: </p>";
if(!empty($_POST['intereses'])){
    foreach ($_POST['intereses'] as $interes) {
        echo "<li>". $interes . "</li>";
    }
}



?>
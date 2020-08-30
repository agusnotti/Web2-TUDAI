<!-- 4. Modifique el ejercicio 2 para que el usuario mediante links html pueda ir modificando el
tamaño de la lista generada. -->

<?php

$colores = array("verde", "violeta", "amarillo", "rosa", "naranja", "turquesa", "azul");
// $colores[0]= "verde";
// $colores[1]= "violeta";
// $colores[2]= "amarillo";
// $colores[3]= "rosa";
// $colores[4]= "naranja";

$nuevoColor = "blanco";
array_push($colores, $nuevoColor);

$count = count($colores);

if(isset($_GET['count']) && ($_GET['count'] <= $count)){
    $count = $_GET['count'];
};

for ($i=0; $i < $count; $i++) { 
    echo "<li> " . $colores[$i] . "</li> ";
}


// foreach ($colores as $color) {
//     echo "<li> " . $color . "</li> ";
// }

?>
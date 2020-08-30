<!-- 2. Escribir un programa que muestre una lista html generada desde el servidor a través de
un arreglo. Identifique las diferencias entre arreglos asociativos e indexados (ver docu
oficial) -->

<?php

$colores = array("verde", "violeta", "amarillo", "rosa", "naranja", "turquesa");
// $colores[0]= "verde";
// $colores[1]= "violeta";
// $colores[2]= "amarillo";
// $colores[3]= "rosa";
// $colores[4]= "naranja";

//$count = count($colores);


// for ($i=0; $i < $count; $i++) { 
//     echo "<li> " . $colores[$i] . "</li> ";
// }

foreach ($colores as $color) {
    echo "<li> " . $color . "</li> ";
}


?>
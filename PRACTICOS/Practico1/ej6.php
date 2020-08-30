<!-- Imprimir la siguiente tabla de multiplicar generada automáticamente en PHP. Modifique
el ejercicio para que el límite de la tabla sea ingresado por un usuario.
 -->
<link rel="stylesheet" href="ej6.css">

<?php

echo "<h1>Tabla de multiplicar</h1>";

$limite = $_GET['limite'];

echo "<table>";

for ($i=0; $i <= $limite; $i++) { 
    echo "<tr>";
    for ($j=0; $j <= $limite; $j++) {  
        if(($i == 0) && ($j == 0)){
            echo "<td></td>";
        }elseif($i == 0){
            echo "<td class='tdAmarillo'>". $j . "</td>";
        }elseif($j == 0){
            echo "<td class='tdAmarillo'>". $i . "</td>";
        }elseif($i == $j){
            echo "<td class='tdAmarillo'>". $i*$j . "</td>";
        } else {
            echo "<td>". $i*$j . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

?>
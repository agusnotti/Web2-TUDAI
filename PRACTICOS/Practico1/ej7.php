<!-- 7. Una persona desea invertir dinero en un banco, el cual le otorga un % de interés
mensual. Escribir un programa para simular la inversión que imprima cuál será la
cantidad de dinero que esta persona tendrá mes a mes durante un año. Genere una
tabla HTML para mostrar el resultado.
 -->

 <link rel="stylesheet" href="estilo.css">

<?php

$monto = 0;
$porcentajeInteres = 0;

if (isset($_POST['monto']) && isset($_POST['interes'])) {
    $monto = $_POST['monto'];
    $porcentajeInteres = $_POST['interes'];
} else {
    echo "error";
}

$cantidadMeses = 12;

echo "<table>
        <tr>
            <th>Mes</th>
            <th>Ganancias</th>
        </tr>";

for ($i = 0; $i < $cantidadMeses; $i++) {
    $interes = $porcentajeInteres * $monto / 100;
    $monto += $interes;

    echo "<tr>
            <td>" . ($i + 1) . "</td>
            <td>" . $monto . "</td>
        </tr>";
}

echo "</table>";


?>
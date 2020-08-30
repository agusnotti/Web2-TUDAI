<!-- 8. Crear una calculadora básica server side. Esta calculadora debe permitir generar
operaciones básicas dado dos números leídos desde un formulario.
Ademas, se deberá incluir una barra de navegación para
- Acceder a una sección número pi: esta sección debe mostrar una
descripción de lo que representa este número y su valor. Investigue diferentes
formas de obtener este valor en PHP.
- Acceder a una sección about que indique los creadores de la calculadora. -->


<?php

require_once "ej8-operaciones.php";

$num1 = 0;
$num2 = 0;
$operacion = "";

if(isset($_GET['numero1']) && isset($_GET['numero2']) && isset($_GET['operaciones'])){
    $num1 = $_GET['numero1'];
    $num2 = $_GET['numero2'];
    $operacion = $_GET['operaciones'];
}

if($operacion == "sumar"){
    echo "<h3>Resultado: " . sumar($num1, $num2) . "</h3>";
} elseif($operacion == "restar"){
    echo "<h3>Resultado: " . restar($num1, $num2) . "</h3>";
} elseif($operacion == "multiplicar"){
    echo "<h3>Resultado: " . multiplicar($num1, $num2) . "</h3>";
} elseif($operacion == "dividir"){
    echo "<h3>Resultado: " . dividir($num1, $num2) . "</h3>";
}


// seccion numero PI

if(isset($_GET['pi'])){
    echo "<p>El  numero pi es....</p>";
}

// seccion creadores de la calculadora
if(isset($_GET['creadores'])){
    echo "<p> Los creadores de la calcu son....</p>";
} 

?>
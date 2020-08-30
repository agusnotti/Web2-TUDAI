<!-- 5. Construir un programa que calcule el índice de masa corporal de una persona (IMC =
peso [kg] / altura [m]2) e informe el estado en el que se encuentra esa persona en
función del valor de IMC.
Bajo peso <18,50
Normal 18,5 - 24,99
Sobrepeso ≥25,00
Obesidad ≥30,00 -->
<?php

$peso = 0;
$altura = 1;

if(isset($_POST['peso']) && isset($_POST['altura'])){
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
}

$imc = calcularIMC($peso, $altura);
echo "<p> IMC: " . $imc . " </p>";

if($imc < 18.5){
    echo "<h3>BAJO PESO</h3>";
} elseif(($imc > 18.5) && ($imc < 24.99)){
    echo "<h3>NORMAL</h3>";
} elseif(($imc >= 25) && ($imc < 30)){
    echo "<h3>SOBREPESO</h3>";
} elseif ($imc >= 30) {
    echo "<h3>OBESIDAD</h3>";
}

function calcularIMC($p, $a){
    $res = $p / pow($a, 2);

    return $res;
}





?>
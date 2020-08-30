
<?php

echo "VARIABLES <br>";
$titulo = "Hello world!";

echo "<h1>" . $titulo . "</h1>";

echo "<br> CONSTANTE --> metodo define() </br>";

define("SALUDO", "Hola Agus");
echo SALUDO;

echo "<br> ARREGLOS </br>";
//ARREGLOS INDEXADOS    
//pueden ser creados usando el constructor array();
$colores = array("verde", "violeta", "amarillo");

//ASIGNACION MANUAL DE INDICE
$colores[0] = "verde";
$colores[1] = "violeta";
$colores[2] = "amarilla";

//CANTIDAD DE ELEMENTOS EN UN ARREGLO --> metodo count()
$count = count($colores); //-->3 int

//ARREGLOS ASOCIATIVOS --> asignando pares clave => valor
$edades = array(
    "Agustina" => 28,
    "Federico" => 4,
    "Gabriela" => 56
);

echo $edades["agustina"];

//$nuevoColor = "rosa";
array_push($colores, "rosa");
//$colores[3]=$nuevoColor;
$count = count($colores);

echo "<br> RECORRO ARREGLOS </br>";

//RECORRO ARREGLO
echo "<br> RECORRO ARREGLOS con FOR </br>";
for ($i = 0; $i < $count; $i++) {
    echo "<li>" . $colores[$i] . "</li>";
}

echo "<br> RECORRO ARREGLOS con FOREACH</br>";
foreach ($edades as $nombre => $edad) {
    echo "<li> La edad de " . $nombre . " es " . $edad . " </li>";
}

echo "<br> FUNCIONES </br>";
function calcularPromedio($ages)
{
    $countAge = count($ages);
    $prom = array_sum($ages) / $countAge;
    return $prom;
}

$promedio = calcularPromedio($edades);
echo "PROMEDIOS EDADES " . $promedio;

echo "<br> FUNCIONES CADENA DE TEXTO </br>";
echo "strlen() --> cantidad de letras ". strlen("Hello world!")."<br>"; // outputs 12
echo "str_word_count() --> cantidad de palabras ". str_word_count("Hello world!")."<br>"; // outputs 2
echo "strrev() --> invierte las palabras ". strrev("Hello world!")."<br>"; // outputs !dlrow olleH
echo "strpos() --> posicion de la palabra ingresada en el segundo parametro ". strpos("Hello world!", "world")."<br>"; // outputs 6
echo "str_replace() --> reemplaza palabras de la frase original ". str_replace("world", "Dolly", "Hello world!")."<br>"; //outputs Hello Dolly!






?>




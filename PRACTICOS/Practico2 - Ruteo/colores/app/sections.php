<?php

function showHome(){
    $html = '<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP1/ejercicio 4 - REUTEADO</title>
        <base href="' . BASE_URL . '">
        <link rel="stylesheet" href="' . BASE_URL . 'app/style.css">
    </head>
    <body>';

    $html.='<h1> Arreglo de colores</h1>';

    $html.='<ul>
                <li><a href="'. BASE_URL.'colores/1">Ver 1 color</a></li>
                <li><a href="'. BASE_URL.'colores/2">Ver 2 colores</a></li>
                <li><a href="'. BASE_URL.'colores/3">Ver 3 colores</a></li>
                <li><a href="'. BASE_URL.'colores/4">Ver 4 colores</a></li>
                <li><a href="'. BASE_URL.'colores/5">Ver 5 colores</a></li>
                <li><a href="'. BASE_URL.'colores/6">Ver 6 colores</a></li>
                <li><a href="'. BASE_URL.'colores">Ver todos</a></li>
            </ul>';

    $html.='</body>
    </html>';

    return $html;
}

function showColores($cantColores = null){
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tabla multiplicar ruteada</title>
        <base href="' . BASE_URL . '">
        <link rel="stylesheet" href="' . BASE_URL . 'app/style.css">
    </head>
    <body>';

    $html.='<h1>Arreglo de colores</h1>';

    $colores = array("Verde", "Violeta", "Amarillo", "Rosa", "Naranja", "Turquesa", "Azul");

    $count = count($colores);

    if ($cantColores == null) {
        $cantColores = $count;
    } 

    for ($i=0; $i < $cantColores; $i++) { 
        $html.= '<li class="images"><img src="'.BASE_URL.'app/img/'.($i+1).'.jpg" alt="'. $colores[$i] .'"></li> ';
    }

    $html.='</body>
    </html>';

    return $html;
}

?>

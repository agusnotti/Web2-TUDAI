<?php

function showHome(){
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tabla multiplicar ruteada</title>
        <link rel="stylesheet" href="' . BASE_URL . 'app/style.css">
        <base href="' . BASE_URL . '">
    </head>
    <body>';

    $html .= '<h1>Tabla multiplicar</h1>';

    $html.= '<ul class="links">
                <li><a href="'. BASE_URL . 'tabla/5">Limite 5</a></li>
                <li><a href="'. BASE_URL . 'tabla/10">Limite 10</a></li>
                <li><a href="'. BASE_URL . 'tabla/20">Limite 20</a></li>
            </ul>';

    // $html .= '<a href="'. BASE_URL . 'tabla/5">Limite 5</a></br>';
    // $html .= '<a href="'. BASE_URL . 'tabla/10">Limite 10</a></br>';
    // $html .= '<a href="'. BASE_URL . 'tabla/20">Limite 20</a></br>';
       
    $html.='</body>
    </html>';
    
    return $html;
}

function showTable($limite){

    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tabla multiplicar ruteada</title>
        <link rel="stylesheet" href="' . BASE_URL . 'app/style.css">
        <base href="' . BASE_URL . '">
    </head>
    <body>';

    $html.='<h1>Tabla con límite ' . $limite .' </h1>';

    $html .='<table>';

    for ($i = 0; $i <= $limite; $i++) {
        $html.= '<tr>';
        for ($j = 0; $j <= $limite; $j++) {
            if (($i == 0) && ($j == 0)) {
                $html.='<td></td>';
            } elseif ($i == 0) {
                $html.= '<td class="tdAmarillo">' . $j . '</td>';
            } elseif ($j == 0) {
                $html.='<td class="tdAmarillo">' . $i . '</td>';
            } elseif ($i == $j) {
                $html.='<td class="tdAmarillo">' . $i * $j . '</td>';
            } else {
                $html.= '<td>' . $i * $j . '</td>';
            }
        }
        $html.='</tr>';
    }
    $html.='</table>';
    $html.='</body>
    </html>';

    return $html;
}

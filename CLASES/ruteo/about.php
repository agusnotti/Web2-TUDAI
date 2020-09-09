<?php

function showAbout($nombre = ''){
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <base href="'. $_SERVER['SERVER-NAME']. dirname($_SERVER['PHP_SELF']) . '/';'" target="_blank">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About</title>
    </head>
    <body>';    

    if($nombre === 'juan'){
        $html .= '<h1>Soy juan</h1>';
        $html .= '<img src="images/juan-codigo.png" alt="Juan codigo">';
    }else{
        $html .= '<h1>Somos el equipo de desarrolladores</h1>';
        $html .= '<img src="images/equipo-desarrollo.jpg" alt="Equipo desarrollo">';
    }
    $html.= '</body>
            </html>';

    return $html;
}

?>

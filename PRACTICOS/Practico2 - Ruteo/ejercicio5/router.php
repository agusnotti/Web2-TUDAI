<?php


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once 'app/sections.php';


if(!empty($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

//var_dump($params);

switch ($params[0]) {
    
    case 'home':
        echo showHome();
        break;

    case 'tabla':
        if(isset($params[1])){
            echo showTable($params[1]);
        }
        break;

    default:
        echo '404 - No se encontro el archivo';
        break;
}


?>
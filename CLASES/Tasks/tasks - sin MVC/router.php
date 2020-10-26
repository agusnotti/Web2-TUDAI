<?php


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once 'index.php';
require_once 'database.php';

// echo $_GET['action']; // Todo lo que viene despues de BASE_URL

if(!empty($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        echo showHome();
        break;

    case '':
        echo showHome();
        break;

    case 'insert':
        echo insertTask();
        break;

    case 'borrar':
        echo deleteTask($params[1]);
        break;

    case 'completar':
        echo updateTask($params[1]);
        break;
    
    default:
        echo '404 - No se encontro el archivo';
        break;
}


?>
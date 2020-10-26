<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once 'app/actions.php';

// var_dump($_GET);
// die();

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

    case 'deudas':
        echo showDeudas();
        // if(isset($_POST['area'])){
        //     echo showFiltro($_POST['area']);
        // }
        break;

    // case 'verFigura':
    //     if(isset($params[1])){
    //         echo showFigura($params[1]);
    //     }
    //     break;
    // case 'lista':
    //     echo showLista();
    //     break;

    default:
        echo '404 - No se encontro el archivo';
        break;
}


?>
<?php

define('BASE_URL','//'. $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']). '/');

require_once 'app/sections.php';

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

    case 'colores':
        $cantColores = null;
        if(isset($params[1])){
            $cantColores = $params[1];
        }
        echo showColores($cantColores);
        break;
        
    
    default:
        echo "404 - Page not found";
        break;
}

?>

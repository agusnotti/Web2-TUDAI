<?php

    include_once 'sumar.php';
    include_once 'about.php';
    include_once 'pi.php';

    if(isset($_GET['action'])){
        
        //echo "esta es la action: $_GET['action']";
        
        //print_r(explode('/', $action));
        $actions = explode('/', $_GET['action']); //Array ( [0] => sumar,  [1] => 2,  [2] => 3 );
        
        if ($actions[0] === 'sumar'){
            // $resultado = $actions[1] +  $actions[2];
            // echo "La suma de $actions[1] +  $actions[2] es $resultado";

            echo showSumar($actions[1],  $actions[2]);

        } else if($actions[0] === 'about'){
            if(isset($actions[1])){
                echo showAbout($actions[1]);
            } else {
                echo showAbout();
            }
        } else if($actions[0] === 'pi'){
            echo showPi();
        } 




    }
?>
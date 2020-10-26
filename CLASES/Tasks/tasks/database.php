<?php

/*
* OBTENER LAS TAREAS DE LA DB
*/
function getTasks(){
    //CONNECTION STRING
    $db = new PDO('mysql:host=localhost;' .'dbname=db_tasks;charset=utf8', 'root', '');
    
    //permite la creación de una sentencia para su posterior uso:
    $sentencia = $db->prepare( "SELECT * FROM task");

    //ejecuta la sentencia que tenemos preparada:
    $sentencia->execute();

    //Itera sobre las tuplas seleccionadas. ME DEVUELVE UN ARREGLO CON TODAS LAS TUPLAS DE LA DB
    $result = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $result;
}

/*
* CREAR UNA TAREA
*/
function insertTask(){
    //CONNECTION STRING
    $db = new PDO('mysql:host=localhost;' .'dbname=db_tasks;charset=utf8', 'root', '');
    
    //permite la creación de una sentencia para su posterior uso:
    $sentencia = $db->prepare("INSERT INTO task(title, description, completed, priority)" . "VALUES(?,?,?,?)");

 
    //HACER UNA VERIFICACION DE LOS DATOS QUE VENGAN EN LOS INPUTS
    
    $completed = 0;
    if (isset($_POST['input_completed'])) {
        $completed = 1;
    }
    //ejecuta la sentencia que tenemos preparada:
    //agarra los datos de los input del form
    $sentencia->execute(array($_POST['input_title'], $_POST['input_description'], $completed, $_POST['input_priority']));

    header("Location: ".BASE_URL."home");
}

function deleteTask($id_task){
    //CONNECTION STRING
    $db = new PDO('mysql:host=localhost;' .'dbname=db_tasks;charset=utf8', 'root', '');
    
    //permite la creación de una sentencia para su posterior uso:
    $sentencia = $db->prepare("DELETE FROM task WHERE id_task=?");
    $sentencia->execute(array($id_task));

    header("Location: ".BASE_URL."home");

}

function updateTask($id_task){
    //CONNECTION STRING
    $db = new PDO('mysql:host=localhost;' .'dbname=db_tasks;charset=utf8', 'root', '');
    
    //permite la creación de una sentencia para su posterior uso:
    $sentencia = $db->prepare("UPDATE task SET completed = 1 WHERE id_task=?");
    $sentencia->execute(array($id_task));

    header("Location: ".BASE_URL."home");

}



?>
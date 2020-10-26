<?php

require_once 'database.php';


function showHome(){
    $title = "Lista de Tareas";

    
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title> <?php echo $title ?> </title>
    </head>

    <body>
        <h1> <?php echo $title?> </h1>

        <div class="container">
            <ul class="list-group">

                <?php   

                    $tasksFromDB = getTasks();

                    foreach ($tasksFromDB as $task) { 
                      
                        if($task->completed == 1){
                            echo '<li class="list-group-item list-group-item-success">' . $task->title . '</br><span class="badge badge-primary badge-pill"> '. $task->description .' </span> <a href="borrar/'. $task->id_task .'" class="btn btn-danger"> Borrar</a></li>';
                        } else {
                            echo '<li class="list-group-item">' . $task->title  . '</br><span class="badge badge-primary badge-pill"> '. $task->description . ' </span> <a href="completar/'. $task->id_task .'" class="btn btn-warning"> Completada</a> <a href="borrar/'. $task->id_task .'" class="btn btn-danger">Borrar</a></li>';   //nombre de la columna de DB
                        }
                    }  

                ?>

            </ul>
        </div>

        <br>
        
        <div class="container">
            <form action="insert" method="post">
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input class="form-control" id="title" name="input_title" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input class="form-control" id="description"  name="input_description">
                </div>
                <div class="form-group">
                    <label for="priority">Prioridad</label>
                    <input class="form-control" id="priority" name="input_priority">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="completed" name="input_completed">
                    <label class="form-check-label" for="completed">Completado</label>
                </div>
                <button type="submit" class="btn btn-primary">AGREGAR</button>
            </form>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    </body>

    </html>


<?php } ?>
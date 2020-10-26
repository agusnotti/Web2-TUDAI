<link rel="stylesheet" href="style.css">

<?php

/*
* ejercicio 3
*Liste todos los registros (filas) de la tabla en una tabla HTML. 
*/


/* CONSUMIR UNA DB DESDE PHP
1. Abrir la conexion con la base de datos
2. Ejecutar la consulta sql  --> SELECT * FROM `pagos`;
3. Obtener los datos de la consulta para procesarlos
4. Cerrar la conexion a la base de datos */


// obtiene todos los pagos de la db
function getPagos(){
    // 1. abrir la conexion
            //parametros
                //servidor: localhost
                //base de datos: db_deudas
                //usuario: root
                //contraseña: root  (en xampp generalmente es vacía)
    $db = new PDO('mysql:host=localhost;'.'dbname=db_deudas;charset=utf8','root', '');

    //2. Ejecutar la consulta sql  --> SELECT * FROM `pagos`;
        //subpasos --> PREPARE
        //         --> EXECUTE

    $query = $db -> prepare('SELECT * FROM `pagos`');

    $query -> execute();

    //3. Obtener los datos de la consulta para procesarlos
    $pagos = $query -> fetchAll(PDO::FETCH_OBJ); //-->devuelve un arreglo con todos los datos de la tabla

    //4. Cerrar la conexion a la base de datos
        //con PDO no es necesario cerrarla

    return $pagos;
}
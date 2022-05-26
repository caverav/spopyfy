<?php
    require dirname(__DIR__).'/db_config.php';
    // echo root path
    // echo dirname(__FILE__);

    $email = $_POST["email"];
    $password = $_POST["password"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    
    //TODO: Insertar contraseña hasheada
    $sql_statement = "INSERT INTO personas(email, password, nombre, apellido) VALUES ($1, $2, $3, $4);";
    $result = pg_query_params($dbconn, $sql_statement, array($email, $password, $nombre, $apellido));
?>
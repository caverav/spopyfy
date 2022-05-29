<?php
    require dirname(__DIR__).'/db_config.php';

    $email = $_POST["email"];
    $password = $_POST["password"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];


    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    $sql_statement = "INSERT INTO personas(email, password, nombre, apellido) VALUES ($1, $2, $3, $4);";
    $result = pg_query_params($dbconn, $sql_statement, array($email, $password_hashed, $nombre, $apellido));

    header("Location: ../html/login.html?success");
?>

<?php
    require("../creds.php");
    session_start();

    $email = $_POST["email"];
    $password = $_POST["password"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    $sql_statement = "INSERT INTO personas(email, password, nombre, apellido) VALUES ($1, $2, $3, $4);";
    $result = pg_query_params($db_conn, $sql_statement, array($email, $password, $nombre, $apellido));
    header("Location: ../html/login.html?success");
?>
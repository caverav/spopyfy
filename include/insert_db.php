<?php
    require("../creds.php");
    session_start();

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql_statement = "INSERT INTO personas(email, password) VALUES ($1, $2);";
    $result = pg_query_params($db_conn, $sql_statement, array($email, $password));
    header("Location: ../html/menu.html?success");
?>
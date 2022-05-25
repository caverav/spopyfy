<?php
    require("../creds.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    // Obtenemos la contraseña hasheada del usuario de la BD.
    $sql_statement = "SELECT password FROM usuarios WHERE email = $1;";
    $result = pg_query_params($db_conn, $sql_statement, array($email));

    // Si no se pudo obtener la contraseña... Pánico.
    if (!$result) {
        exit();
    }

    //TODO: Crear contraseña hasheada

    $row = pg_fetch_row($result);
    $password_hashed = $row[0];

    /*if (password_verify($password, $password_hashed)) {
        session_start();
        $_SESSION["email"] = $email;
        echo("¡Credenciales correctas!");
    }*/

    session_start();
    $_SESSION["email"] = $email;
    $_SESSION['loggedin'] = true;

    header("Location: ../index.html");
?>

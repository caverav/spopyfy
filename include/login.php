<?php
    require dirname(__DIR__).'/db_config.php';

    $email = $_POST["email"];
    $password = $_POST["password"];

    // Obtenemos la contraseña hasheada del usuario de la BD.
    $sql_statement_users = "SELECT password, nombre, apellido, id, suscripcion_activa FROM usuarios WHERE email = $1;";
    $result_users = pg_query_params($dbconn, $sql_statement_users, array($email));

    //Para artistas
    $sql_statement_artists = "SELECT password, nombre, apellido, id, nombre_artistico, verificado FROM artistas WHERE email = $1;";
    $result_artists = pg_query_params($dbconn, $sql_statement_artists, array($email));

    // si no encuentra resultados
    if (pg_num_rows($result_users) == 0 && pg_num_rows($result_artists) == 0) {
        header("Location: ../html/login.html?error");
    }
    $row = (pg_num_rows($result_users) != 0) ? pg_fetch_row($result_users) : pg_fetch_row($result_artists);

    $password_hashed = $row[0];

    if (password_verify($password, $password_hashed)) {
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["nombre"] = $row[1];
        $_SESSION["apellido"] = $row[2];
        $_SESSION['loggedin'] = true;
        $_SESSION['tipo'] = pg_num_rows($result_users) != 0 ? "usuario" : "artista";
        $_SESSION['suscripcion_activa'] = $row[4] == 't' ? 'Activa' : 'Inactiva';
        $_SESSION['nombre_artistico'] = pg_num_rows($result_users) == 0 ? $row[4] : "";
        $_SESSION['verificado'] = pg_num_rows($result_users) == 0 ? $row[5] : "";
        $_SESSION['id'] = $row[3];
        header("Location: ../index.html");
    }
    else {
        header("Location: ../html/login.html?error");
    }

?>

<?php
/* INSERT INTO artistas(nombre, apellido, email, password, nombre_artistico, verificado) VALUES ('admin', 'admin', 'admin@admin.cl', '$2a$10$IAp5vB5LcBd.fyw3OIKzz.tib6BJg2i6U01Gl3yQb7ek62ECkqliG', 'artistico', TRUE); */
    require dirname(__DIR__).'/db_config.php';

    $email = $_POST["email"];
    $password = $_POST["password"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];


    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    /* verificar que el email no exista en la base de datos */
    $sql = "SELECT * FROM usuarios WHERE email = $1";
    $result = pg_query_params($dbconn, $sql, array($email));
    if (pg_num_rows($result) > 0) {
        header("Location: ../html/register.html?error");
        exit;
    }
    $sql_statement = "INSERT INTO usuarios(email, password, nombre, apellido, suscripcion_activa) VALUES ($1, $2, $3, $4, $5);";
    $result = pg_query_params($dbconn, $sql_statement, array($email, $password_hashed, $nombre, $apellido, 'FALSE'));

    header("Location: ../html/login.html?success");
?>

<?php 
    require dirname(__DIR__).'/db_config.php';

    $nombre = $_POST["nombre"];
    $letra = $_POST["letra"];
    $fecha = $_POST["fecha"];

    $upload = "INSERT INTO canciones(nombre, letra, fecha_composicion) VALUES ($1, $2, $3);";
    $subida = pg_query_params($dbconn, $upload, array($nombre, $letra, $fecha));

    $cancion_subida = "SELECT id FROM canciones ORDER BY id DESC LIMIT 1;";
    $id_cancion_rough = pg_query_params($dbconn, $cancion_subida, array());

    session_start();
    $id_cancion = pg_fetch_row($id_cancion_rough);
    $id_usuario = $_SESSION['id'];

    echo "<h1 class='text-3xl'>" . $id_usuario . "</h1>";


    $sql_statement = "INSERT INTO artista_compuso_cancion(id_artista, id_cancion) VALUES ($1, $2);";
    $final = pg_query_params($dbconn, $sql_statement, array($id_cancion[0], $id_cancion));

    header("Location: ../html/crud_canciones.html?success");
?>
<?php
    // Credenciales de acceso.
    $cred_string = "host=localhost port=5432 dbname=web user=postgres password=ricky";
    // Creamos la conexión.
    $db_conn = pg_connect($cred_string);
    // Verificamos la conexión.
    if (!$db_conn) {
        echo("Error: No se ha podido conectar a la base de datos\n");
    } else {
        echo("Conexión exitosa!\n");
    }
?>
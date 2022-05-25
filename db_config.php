<?php
    $conn_string = "host=".getenv('PGHOST')." port=5432"." dbname=".getenv('PGDATABASE')." user=".getenv('PGUSER')." password=".getenv('PGPASSWORD');

    $dbconn = pg_connect($conn_string);

    // Revisamos el estado de la conexión en caso de errores.
    if(!$dbconn) {
    echo '<div class="alert alert-danger"><strong>Error:</strong> No se ha podido conectar con la base de datos.</div>';
    }
    /* Para incluir la configuración de este archivo en otro archivo .php utilice 
    <?php include $_SERVER['DOCUMENT_ROOT'].'/db_config.php'; ?>
    */
?>
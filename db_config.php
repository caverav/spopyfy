<?php
    include 'creds.php';
    $conn_string = "host=" . $host . " port=" . $port . " dbname=" . $dbname . " user=" . $user . " password=" . $password;

    $dbconn = pg_connect($conn_string);

    // Revisamos el estado de la conexión en caso de errores.
    if(!$dbconn) {
    echo '<div class="alert alert-danger"><strong>Error:</strong> No se ha podido conectar con la base de datos.</div>';
    }
    /* Para incluir la configuración de este archivo en otro archivo .php utilice 
    <?php include $_SERVER['DOCUMENT_ROOT'].'/db_config.php'; ?>
    */

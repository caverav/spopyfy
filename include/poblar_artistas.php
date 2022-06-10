<?php

    /* ARCHIVO COMPLEMENTARIO, ninguna página redigirá a este archivo y no debe ejecutarse más de una vez */

    require dirname(__DIR__).'/db_config.php';

    $sql_statement = "INSERT INTO artistas(email, password, nombre, apellido, nombre_artistico, verificado) VALUES ($1, $2, $3, $4, $5, $6);";

    $result = pg_query_params($dbconn, $sql_statement, array('katy.perry@usm.cl', password_hash('californian', PASSWORD_DEFAULT), 'Cathetine', 'Morales', 'Katy Perry', 'TRUE'));
    $result = pg_query_params($dbconn, $sql_statement, array('tyler.crea@hotmail.com', password_hash('rap', PASSWORD_DEFAULT), 'Tyler', 'Okonma', 'Tyler The Creator', 'TRUE'));
    $result = pg_query_params($dbconn, $sql_statement, array('pop.lolita@usm.cl', password_hash('rockstar', PASSWORD_DEFAULT), 'Catalina', 'Vera', 'Pop Lolita', 'FALSE'));

?>

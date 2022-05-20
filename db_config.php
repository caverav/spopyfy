<?php
/* Detalles de la conexión */
// $conn_string = "host=localhost port=5432 dbname=spopyfy user=postgres password=postgres";
require_once 'creds.php';

$conn_string = "host=" . $host . " port=" . $port . " dbname=" . $dbname . " user=" . $user . " password=" . $password;

// Establecemos una conexión con el servidor postgresSQL
$dbconn = pg_connect($conn_string);

// Revisamos el estado de la conexión en caso de errores.
if(!$dbconn) {
// echo '<div class="alert alert-danger"><strong>Error:</strong> No se ha podido conectar con la base de datos.</div>';
echo '
<div class="flex justify-center">
    <div class="inline-flex items-center px-6 py-5 mx-auto mb-3 text-base text-red-700 bg-red-200 rounded-lg" role="alert">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
        </svg>
        No se ha podido conectar con la base de datos.
    </div>
</div>';

}
/* Para incluir la configuración de este archivo en otro archivo .php utilice 
<?php include $_SERVER['DOCUMENT_ROOT'].'/db_config.php'; ?>
*/

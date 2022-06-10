<?php include '../include/header.html'; ?>
<?php include '../include/navbar.html'; ?>
<?php include '../db_config.php'; ?>
<?php
//TODO: dejarlo bonito y asegurarse de que se pueda editar la cancion


if (isset($_POST['action']) && $_POST['action'] == 'delete') {
    $id = $_POST['id'];
    $sql = "DELETE FROM album_tiene_cancion WHERE id_cancion = $1";
    $result = pg_query_params($dbconn, $sql, array($id));
    $sql = "DELETE FROM artista_compuso_cancion WHERE id_cancion = $1";
    $result = pg_query_params($dbconn, $sql, array($id));
    $sql = "DELETE FROM canciones WHERE id = $1";
    $result = pg_query_params($dbconn, $sql, array($id));
    if ($result) {
        header('Location: ../html/crud_canciones.html?success');
    } else {
        header('Location: ../html/crud_canciones.html?error');
    }
}

if (isset($_POST['action']) && $_POST['action'] == 'update') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $letra = $_POST['letra'];
    $fecha_lanzamiento = $_POST['fecha_composicion'];

    $sql = "UPDATE canciones SET nombre=$1, letra=$2, fecha_composicion=$3 WHERE id=$4";
    $result = pg_query_params($dbconn, $sql, array($nombre, $letra, $fecha_lanzamiento, $id));
    if (!$result) {
        header("Location: ../html/crud_canciones.html?error");
    } else {
        header("Location: ../html/crud_canciones.html?success");
    }
}
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM canciones WHERE id = $id";
        $result = pg_query_params($dbconn, $sql, array());
        $cancion = pg_fetch_assoc($result);
        echo   '
            <div class="flex justify-center mt-4">
                <form action="editar_cancion.php" method="POST">
                    <div class="flex flex-wrap mb-6 -mx-3">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="name">
                                Nombre
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name" type="text" name="nombre" value="'.htmlspecialchars($cancion['nombre']).'"required>
                        </div>
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="lyrics">
                                Letra
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="letra" value="'.htmlspecialchars($cancion['letra']).'" required>
                        </div>
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="date">
                                Fecha de composición
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-date"
                                type="date" name="fecha_composicion" value="'.htmlspecialchars($cancion['fecha_composicion']).'" required>
                        </div>
                        <input type="hidden" name="id" value="'.$id.'">
                    </div>';
        $sql = "SELECT * FROM album WHERE id IN (SELECT id_album FROM album_tiene_cancion WHERE id_cancion = $id)";
        $result = pg_query_params($dbconn, $sql, array());
        while ($album = pg_fetch_assoc($result)) {
            echo '<input type="checkbox" name="albumes[]" value="'.htmlspecialchars($album['id']).'" checked>'.htmlspecialchars($album['nombre']).'<br>';
        }
        echo '<div class="flex justify-around">
            <button class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-pink-700 focus:outline-none focus:shadow-outline" type="submit" name="action" value="delete">
                Eliminar canción
            </button>
            <button class="px-4 py-2 font-bold text-white bg-pink-500 rounded hover:bg-pink-700 focus:outline-none focus:shadow-outline" type="submit" name="action" value="update">
                Modificar canción
            </button>
        </div>';
        echo '</form>';
        echo '</div>';
    }

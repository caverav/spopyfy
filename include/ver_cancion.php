<?php include '../include/header.html'; ?>
<?php include '../include/navbar.html'; ?>
<?php include '../db_config.php'; ?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM canciones WHERE id = $1";
$result = pg_query_params($dbconn, $sql, array($id));
$cancion = pg_fetch_array($result);
$sql = "SELECT * FROM album WHERE id = (SELECT id_album FROM album_tiene_cancion WHERE id_cancion = $1)";
$result = pg_query_params($dbconn, $sql, array($id));
$album = pg_fetch_array($result);
$sql = "SELECT * FROM artistas WHERE id = (SELECT id_artista FROM artista_compuso_cancion WHERE id_cancion = $1)";
$result = pg_query_params($dbconn, $sql, array($id));
$artista = pg_fetch_array($result);
?>
<div class="flex justify-center w-full max-w-lg mx-auto mt-5">
    <div class="flex flex-col justify-between">
        <div class="flex p-3 mb-5 bg-pink-200 rounded shadow-xl">
            <img src="<?php echo $album['imagen']; ?>" alt="<?php echo $cancion['nombre']; ?>" class="w-1/2">
            <div class="flex flex-col justify-center w-full">
                <h1 class="text-3xl font-bold text-center"><?php echo $cancion['nombre']; ?></h1>
                <p class="text-xl text-center">Album: <?php echo $album['nombre']; ?></p>
                <p class="text-xl text-center">Artista: <?php echo $artista['nombre_artistico']; ?></p>
            </div>
        </div>
        <h1 class="text-2xl">Letra: <br></h1>
        <p class="text-xl"><?php echo $cancion['letra']; ?></p>
    </div>
</div>

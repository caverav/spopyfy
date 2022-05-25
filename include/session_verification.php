<?php

session_start();

//TODO: SOLO DIRIGE A USUARIO NORMAL, NO ARTISTA

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: ../html/index_usuario.html");
} else {
    
}

?>
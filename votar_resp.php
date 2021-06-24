<?php

if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_REQUEST["musica"]) && (!isset($_COOKIE["voto"]))) {
    setcookie('voto', $_POST["musica"], (time() + (2 * 24 * 3600)));
}
header('Location: index.php');
?>

<?php
$host = "localhost";
$db = "phonecalls";
$user = "root";
$password = "";
if ($mysqli = mysqli_connect($host, $user, $password, $db)) {
} else {
    die('No se logró conectar a la BD');
}

<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "doceria";

$conexaodb = mysqli_connect($host, $user, $pass, $dbname);

if (!$conexaodb) {
    die("Erro de conexão: " . mysqli_connect_error());
}
?>
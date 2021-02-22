<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vemsegura";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão com o BD falhou: " . mysqli_connect_error());
}

//session_start();
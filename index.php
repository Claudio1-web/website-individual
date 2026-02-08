<?php
$content = "<h1>Ida ne'e maka pagina primeiru</h1><p>Dadus Dosente</p>";
include "main.php";

// session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}


?>

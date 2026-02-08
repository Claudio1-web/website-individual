<?php
$content = "<h1>Tabela Dadus Media</h1><p>Media!</p>";
include "main.php";



session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>





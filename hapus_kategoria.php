<?php
session_start();
require_once 'DB/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $stmt = $pdo->prepare("DELETE FROM tbl_kategoria WHERE id=:id");
    $stmt->execute(['id' => $id]);

    header('Location: index3.php');
    exit();
} else {
    echo "ID la hetan.";
}

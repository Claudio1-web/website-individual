<?php
session_start();
require_once 'DB/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt_f = $pdo->prepare("SELECT foto FROM tbl_media WHERE id=:id");
    $stmt_f->execute(['id' => $id]);
    $row = $stmt_f->fetch();
    if ($row && $row['foto']) {
        @unlink('uploads/' . $row['foto']);
    }

    $stmt = $pdo->prepare("DELETE FROM tbl_media WHERE id=:id");
    $stmt->execute(['id' => $id]);

    header('Location: index1.php');
    exit();
} else {
    echo "ID la hetan.";
}

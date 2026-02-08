<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

require_once 'DB/config.php';

if (isset($_POST['submit'])) {
    $titulu = $_POST['titulu'];
    $sub_titulu = $_POST['sub_titulu'];
    $konteudu = $_POST['konteudu'];

    $foto = '';
    if ($_FILES['foto']['name']) {
        $foto = time() . '_' . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], 'uploads/' . $foto);
    }

    $stmt = $pdo->prepare("INSERT INTO tbl_media (titulu, sub_titulu, foto, konteudu) VALUES (:titulu, :sub_titulu, :foto, :konteudu)");
    $stmt->execute([
        'titulu' => $titulu,
        'sub_titulu' => $sub_titulu,
        'foto' => $foto,
        'konteudu' => $konteudu
    ]);

    header('Location: index1.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tama Dadus Media</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-4">
        <h3>Tama Dadus Media</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Titulu</label>
                <input type="text" name="titulu" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Sub Titulu</label>
                <input type="text" name="sub_titulu" class="form-control">
            </div>
            <div class="mb-3">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <div class="mb-3">
                <label>Konteudu</label>
                <textarea name="konteudu" class="form-control" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Tama Dadus</button>
        </form>
    </div>
</body>

</html>
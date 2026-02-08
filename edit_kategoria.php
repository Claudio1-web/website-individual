<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

require_once 'DB/config.php';
include 'DB/config.php';
if (!isset($_GET['id'])) {
    header('Location: index3.php');
    exit();
}

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM tbl_kategoria WHERE id=:id");
$stmt->execute(['id' => $id]);
$media = $stmt->fetch();

if (!$media) {
    header('Location: index3.php');
    exit();
}

if (isset($_POST['submit'])) {
    $naran = $_POST['naran'];
    $kategoria = $_POST['kategoria'];
    $konteudu = $_POST['konteudu'];

    $foto = $media['foto'];
    if ($_FILES['foto']['name']) {
        if ($foto) @unlink('uploads/' . $foto);
        $foto = time() . '_' . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], 'uploads/' . $foto);
    }

    $stmt = $pdo->prepare("UPDATE tbl_kategoria SET naran=:naran, kategoria=:kategoria, konteudu=:konteudu WHERE id=:id");
    $stmt->execute([
        'naran' => $naran,
        'kategoria' => $kategoria,
        'konteudu' => $konteudu,
        'id' => $id
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
    <title>Renova Dadus Media</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-4">
        <h3>Renova Dadus Media</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label>naran</label>
                <input type="text" name="naran" class="form-control" value="<?= htmlspecialchars($media['naran']) ?>" required>
            </div>
            <div class="mb-3">
                <label>kategoria</label>
                <input type="text" name="kategoria" class="form-control" value="<?= htmlspecialchars($media['kategoria']) ?>">
            <div class="mb-3">
                <label>Konteudu</label>
                <textarea name="konteudu" class="form-control" required><?= htmlspecialchars($media['konteudu']) ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Renova Dadus</button>
        </form>
    </div>
</body>

</html>
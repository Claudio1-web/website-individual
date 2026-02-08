<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

require_once 'DB/config.php';

$stmt = $pdo->query("SELECT * FROM tbl_media ORDER BY id DESC");
$media = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-4">
        <a href="add_media.php" class="btn btn-info mb-3">Tama Dadus Media</a>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulu</th>
                    <th>Sub Titulu</th>
                    <th>Foto</th>
                    <th>Konteudu</th>
                    <th>Aksaun</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($media)): ?>
                    <?php $no = 1;
                    foreach ($media as $m): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= htmlspecialchars($m['titulu']) ?></td>
                            <td><?= htmlspecialchars($m['sub_titulu']) ?></td>
                            <td>
                                <img src="<?= $m['foto'] ? 'uploads/' . $m['foto'] : '123456.jpg' ?>" width="120">
                            </td>
                            <td><?= htmlspecialchars($m['konteudu']) ?></td>
                            <td>
                                <a href="edit_media.php?id=<?= $m['id'] ?>" class="btn btn-sm btn-primary mb-1">Renova</a>
                                <a href="hapus_media.php?id=<?= $m['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Hamos</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Dadus seidauk iha</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
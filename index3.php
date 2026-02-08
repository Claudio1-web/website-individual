
<?php


$content = "<h1>pagina kategoria media</h1><p>Dadus Estudantes!</p>";session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');  

    exit();
}
include("main.php");
require_once 'DB/config.php';

$stmt = $pdo->query("SELECT * FROM tbl_kategoria ORDER BY id DESC");
$media = $stmt->fetchAll();
?>

    <div class="container mt-4">
        <a href="add_media_kategoria.php" class="btn btn-info mb-3">add kategoria media</a>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>naran media</th>
                    <th>kategoria media</th>
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
                            <td><?= htmlspecialchars($m['naran']) ?></td>
                            <td><?= htmlspecialchars($m['kategoria']) ?></td>
                            
                            <td><?= htmlspecialchars($m['konteudu']) ?></td>
                            <td>
                                <a href="edit_kategoria.php?id=<?= $m['id'] ?>" class="btn btn-sm btn-primary mb-1">Renova</a>
                                <a href="hapus_kategoria.php?id=<?= $m['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Hamos</a>
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


















?>
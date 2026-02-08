
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kominasi html ho php</title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.rtl.min.css.map">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center mt-5">Prosesu Login</h1>
                <?php
                session_start();
                include 'DB/config.php';
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    // Persiapan dan eksekusi query
                    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
                    $stmt->bindParam(':username', $username);
                    $stmt->execute();
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);

                    // Verifikasi password
                    if ($user && password_verify($password, $user['password'])) {
                        // Login berhasil
                        $_SESSION['username'] = $user['username'];
                        // Redirect ke dashboard atau halaman lain
                        header('Location: navbar.php');
                        exit();
                    } else {
                        // Login gagal
                        echo '<div class="alert alert-danger" role="alert">Login Erru! Username ou password la los.</div>';
                    }
                } else {
                    echo '<div class="alert alert-warning" role="alert">Metode request la validu.</div>';
                }
                ?>
                <a href="login.php" class="btn btn-primary mt-3">Ba fali Pagina Login</a>
                
            </div>
        </div>
    </div>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dist/js/bootstrap.bundle.min.js.map"></script>
 
 



    
   


 

    
</body>
</html>
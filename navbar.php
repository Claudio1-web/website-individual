<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nave</title>
  <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css.map">
  <link rel="stylesheet" href="assets/dist/css/bootstrap.rtl.min.css">
  <link rel="stylesheet" href="assets/dist/css/bootstrap.rtl.min.css.map">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="logout.php">logout</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"> 
            <a class="nav-link active" aria-current="page" href="index.php">Kategoria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index1.php">Media</a>
          </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index3.php">kategoria media</a>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
 <?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav>
    Bem-vindu, <?= $_SESSION['username'] ?? 'Tamu' ?>
</nav>

</body>

</html>
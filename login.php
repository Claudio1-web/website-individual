<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.rtl.min.css.map">
</head>

<body>
    <main class="container">
        <div style="padding: 100px;" class="row">
            <div class="col-12 text-left">
                <h1 style="color:blue; text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Please Login to System</h1>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/imagen/Pasted image.png" class="img-fluid rounded-start" alt="Login Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <form action="proses_login.php" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3 text-left">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</body>

</html>
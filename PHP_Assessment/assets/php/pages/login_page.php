<?php
session_start();
unset($_SESSION['user_name']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand fs-1 fw-bold text-uppercase text-white" href="../../../index.php">Dictio<span class="text-warning">n</span>ary <img class="mb-3" src="../../icon/books.png" alt="" srcset="" style="width: 60px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="ms-3 btn btn-warning" href="./register_page.php">Register</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="mt-5 pt-5 row d-flex justify-content-center">
        <div class="col-md-6 col-sm-8">
            <h2 class="text-white mb-3 text-center">LOGIN</h2>
            <form method="POST" action="../manage_function.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white fw-bold fs-5">User Name </label>
                    <input type="text" class="form-control p-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name" name="name">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white fw-bold fs-5">Password</label>
                    <input type="password" class="form-control p-2" id="exampleInputPassword1" placeholder="Enter Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3" name="submit" value="login">Login</button>
            </form>
        </div>
    </main>


    <script src="../../js/lib/bootstrap.bundle.min.js"></script>
    <script src="../../js/script.js"></script>
</body>

</html>
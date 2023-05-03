<?php
include("../dbconnection.php");

// define variables and set to empty values
// $nameErr = $emailErr = $passwordErr = "";
// $name = $email = $password = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     if (empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["password"])) {
//         $nameErr = "Name is required";
//     } else {

//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
//             $nameErr = "Only letters and white space allowed";
//         } else {
//             $name = $_POST["name"];
//         }
//     }

//     if (empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["password"])) {
//         $emailErr = "Email is required";
//     } else {

//         // check if e-mail address is well-formed
//         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $emailErr = "Invalid email format";
//         } else {
//             $email = $_POST["email"];
//         }
//     }

//     if (empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["password"])) {
//         $passwordErr = 'Password is required.';
//     } else {
//         $password = $_POST["password"];
//         // check if password is 8 characters
//         if (strlen($password) < 8) {
//             $passwordErr = 'Password should be at least 8 characters.';
//         } else {
//             $password = $_POST["password"];
//         }
//     }
// }

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
                            <a class="btn btn-primary" aria-current="page" href="./login_page.php">Login</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="mt-5 row d-flex justify-content-center m-0">
        <div class="col-md-6 col-sm-8">
            <form method="POST" action="../manage_function.php" enctype="multipart/form-data">
                <h2 class="text-center text-white p-4" style="border-bottom:1px soild #fff">NEW USER</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white fw-bold fs-5">User Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control p-2" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter Your Name" required>
                    <!-- <span class="text-danger"><?= $nameErr ?></span> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white fw-bold fs-5">Email Id</label>
                    <input type="email" class="form-control p-2" id="exampleInputPassword1" name="email" placeholder="Enter Email Address" required>
                    <!-- <span class="text-danger"><?= $emailErr ?></span> -->
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-white fw-bold fs-5">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control p-2" id="password" name="password" placeholder="Enter Password" required>
                    <!-- <span class="text-danger"><?= $passwordErr ?></span> -->
                </div>
                <div class="mb-3">
                    <label for="profile" class="form-label text-white fw-bold fs-5">Profile Picture </label>
                    <input type="file" class="form-control p-2" id="profile" name="profile" required>
                    <!-- <span class="text-danger"><?= $passwordErr ?></span> -->
                </div>

                <button type="submit" class="btn btn-warning w-100 mt-3 fw-bold p-2" name="submit" value="register" id="registerBtn">Register</button>
            </form>
        </div>
    </main>

    <script src="../../js/lib/bootstrap.bundle.min.js"></script>
    <script src="../../js/lib/jquery-3.6.3.min.js"></script>
    <script src="../../js/script.js"></script>
</body>

</html>
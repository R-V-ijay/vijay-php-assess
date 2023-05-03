<?php

include("../dbconnection.php");
session_start();

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
        <nav class="navbar navbar-expand-lg p-4">
            <div class="container">
                <input type="text" class="form-control w-25">
                <button class="btn btn-warning ms-3">Search</button>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="btn btn-primary" aria-current="page" href="../pages/add_words.php">+</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger mx-3" aria-current="page" href="#">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" aria-current="page" href="#">Back</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="row d-flex justify-content-center m-0">
        <div class="col-lg-8 mt-4">
            <table class="table">
                <thead>

                    <tr>
                        <th scope="col" class="fs-1"><span class="text-warning">Word : </span><span class="text-white"><?= strtoupper($_SESSION['search_word'])  ?> </span> </th>
                    </tr>

                </thead>
                <tbody>

                    <tr>
                        <th scope="row"> <img src="../<?= $_SESSION['word_img'] ?>" alt="" style="width:300px;"> </th>
                    </tr>

                    <tr>
                        <th scope="row">
                            <h2 class="text-warning">Synonyms : <span class="text-white">aaaa </span><a class="btn btn-danger" href="./add_synonyms.php">+</a>
                            </h2>
                            <h2 class="text-warning">Antonyms : <span class="text-white">bbbb</span> <a class="btn btn-danger" href="./add_antonyms.php">+</a>
                            </h2>
                        </th>
                    </tr>

                    <tr>
                        <th scope="row">
                            <p class="text-white">-Add Comments Here -</p>
                            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Comment..."></textarea>
                            <button class="btn btn-primary mt-3">Post</button>
                    </tr>

                    <tr>
                        <th scope="row">
                            <p class="text-white">- Comments -</p>

                    </tr>

                </tbody>
            </table>
        </div>
    </main>



    <script src="../../js/lib/bootstrap.bundle.min.js"></script>
    <script src="../../js/script.js"></script>
</body>

</html>
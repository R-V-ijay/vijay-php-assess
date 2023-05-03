<?php
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
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand fs-1 fw-bold text-uppercase text-white" href="#">Dictio<span class="text-warning">n</span>ary</a>
            </div>
        </nav>
    </header>
    <main class="addWordArea container mt-5 pt-5">

        <form action="../../../assets/php/manage_function.php" enctype="multipart/form-data">

            <div class="text-center">
                <input type="hidden" name="userId" value="<?= $_SESSION['user_id'] ?>">
                <input type="hidden" name="wordId" value="<?= $_SESSION['word_id'] ?>">
                <h1 class="fs-1 text-center text-warning mb-5"> Add - Synonyms</h1>
                <input type="text" class="p-3 w-50 mb-4 form-control m-auto fs-3" name="syname">
                <input type="file" class="form-control w-50 m-auto mb-3" name="synimg">
                <button class="w-25 btn btn-warning fw-bold p-2" type="submit" name="submit" value="addsyn">Add</button>
            </div>

        </form>

        <div class="text-start w-50 m-auto">
            <button class="w-25 btn btn-danger fw-bold p-2 mt-5">Back</button>
        </div>
    </main>



    <script src="../../js/lib/bootstrap.bundle.min.js"></script>
    <script src="../../js/script.js"></script>
</body>

</html>
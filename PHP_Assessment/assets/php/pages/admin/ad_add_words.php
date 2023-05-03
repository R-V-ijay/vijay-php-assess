<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class=" container">
                <a class="navbar-brand fs-2 fw-bold text-uppercase text-white" href="../../index.php">ADMIN PANEL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto ">
                        <li class="nav-item">
                            <a href="./ad_add_words.php" class="nav-link text-white">ADD WORDS</a>
                        </li>
                        <li class="nav-item">
                            <a href="./ad_add_SyAN.php" class="nav-link">ADD SYNONYMS / ANTONYMS</a>
                        </li>
                        <li class="nav-item">
                            <a href="./words_table.php" class="nav-link ">WORDS TABLE</a>
                        </li>
                        <li class="nav-item">
                            <a href="./ad_comment.php" class="nav-link">COMMENTS TABLE</a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-danger" class="nav-link ">Logout</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="addWordArea container">
        <form action="" enctype=" multipart/form-data">
            <div class="text-center">
                <h1 class="fs-1 text-center text-warning mb-5"> Add Words Here</h1>
                <input type="text" class="p-3 w-50 mb-4 form-control m-auto fs-3">
                <input type="file" class="form-control w-50 m-auto mb-3">
                <button class="w-25 btn btn-warning fw-bold p-2">Add</button>
            </div>
        </form>
    </main>



    <script src="../../assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>
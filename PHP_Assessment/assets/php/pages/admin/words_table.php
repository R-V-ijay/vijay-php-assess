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
                            <a href="./ad_add_words.php" class="nav-link ">ADD WORDS</a>
                        </li>
                        <li class="nav-item">
                            <a href="./ad_add_SyAN.php" class="nav-link">ADD SYNONYMS / ANTONYMS</a>
                        </li>
                        <li class="nav-item">
                            <a href="./words_table.php" class="nav-link text-white">WORDS TABLE</a>
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
    <main class="row d-flex justify-content-center m-0">
        <div class="col-md-10 col-sm-8 my-5">
            <h2 class="text-warning text-center mb-3">WORDS TABLE</h2>
            <table class="table text-white">
                <thead>
                    <tr class="text-center fs-4 bg-dark">
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>WORD</th>
                        <th>USER</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <th>1</th>
                        <td>Img</td>
                        <td>young</td>
                        <td>Vijay</td>
                        <td>1</td>
                        <td class="d-flex justify-content-around">

                            <button class="btn btn-primary">Approve</button>
                            <button class="btn btn-warning">Disapprove</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </main>



    <script src="../../../js/lib/bootstrap.bundle.min.js"></script>
    <script src="../../../js/script.js"></script>
</body>

</html>
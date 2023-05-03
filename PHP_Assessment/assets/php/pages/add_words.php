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
    <main class="mt-5 pt-5 container">
        <form method="POST" action="../manage_function.php" enctype="multipart/form-data">
            <div class="text-center">
                <h1 class="fs-1 text-center text-warning mb-5"> Add Words Here</h1>
                <input type="text" class="p-3 w-50 mb-4 form-control m-auto fs-3" name="newWord">
                <input type="file" class="form-control w-50 m-auto mb-3" name="WordImg">
                <button class="w-25 btn btn-warning fw-bold p-2" type="submit" name="submit" value="addWord">Add</button>
            </div>
        </form>

        <div class="text-start w-50 m-auto mt-5">
            <a class="w-25 btn btn-danger fw-bold p-2 mt-5" href="../../../index.php">Back</a>
        </div>
    </main>

    <script src="../../"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>
<?php
include __DIR__ . '/functions.php';
$numb_of_char = $_GET['char'];

if (!empty($numb_of_char)) {
    header('Location: ./partials/_user-password.php');
}

session_start();
$_SESSION['psw'] = generate_psw()


    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="mt-5 text-center">
        <div class="card w-50 m-auto">
            <div class="card-header">Lunghezza Password da generare</div>
            <div class="card-body">
                <form method="get">
                    <input type="number" name="char" id="char" class="form-control" min="1" max="20">
                    <button class="btn btn-primary mt-3">Genera</button>
                </form>
                <h1>
                    La tua password è:
                    <?php echo generate_psw() ?>
                </h1>

            </div>
        </div>
    </div>
</body>

</html>
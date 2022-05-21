<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b3cb670a6e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Quipux</title>
</head>

<body>
    <header>
        <div class="menu">
            <a href="index.php" class="logo">
                <img src="./assets/img/logo.png" alt="Bussines logo">
            </a>
            <div class="breadcrumbs">
                <a href="index.php"><img src="assets/img/house.svg" alt=""></a>
                <span>/</span>
                <a href="/bussines.php">EMPRESAS</a>
                <span>/</span>
                <a class="article" href="/article.php">ARTÍCULO</a>
                <a class="bussines" href="/bussines.php">NOMBRE EMPRESA</a>
            </div>
        </div>
        <div class="drop-down">
            <i class="fa-solid fa-user"></i>
            <div class="dropdown">
                <a type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    Usuario Apellido <span><i class="fas fa-angle-down"></i></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item" type="button">Acción 1</button></li>
                    <li><button class="dropdown-item" type="button">Acción 2</button></li>
                    <li><button class="dropdown-item" type="button">Acción 3</button></li>
                </ul>
            </div>
        </div>


    </header>
<?php
//128 caratteri per card
    include "connect.php";
    session_destroy();
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="stile.css">
        <title>LibreComics</title>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </head>
    <body class="bg-dark text-light z-0">
        <!--navbar-->
        <nav class="navbar bg-dark navbar-warning border border-warning-subtle sticky-top z-2 top-0 end-0 w-100">
            <div class="container-fluid">     
                <a class="navbar-brand text-warning fs-1">
                    <img src="provvisoria.jpg" class="rounded float-start border border-warning me-2" width="50" height="50" alt="..."><h1>LibreComics</h1>
                </a>
                <form class="d-flex" role="search">
                <input class="form-control m-2" type="search" placeholder="Naviga tra Articoli" aria-label="Cerca">
                <button class="btn btn-outline-success" type="submit">Cerca</button>
                <div class="text-end">
                    <button type="button" onclick="location.href='login.php'" class="btn btn-outline-light me-2 mb-1 ">Login</button>
                    <button type="button" onclick="location.href='registrazione.php'" class="btn btn-warning">Registrati</button>
                </div>
            </form>
            </div>
        </nav>
        <!--fine navbar-->
        <!--grid-->
        <div class="container text-center mt-5">
            <form action="connect.php" method="get" id="1"></form>
            <?php riempiCard() ?>
        </div>
        <!--fine grid-->
        <!--scheda pagine
        <nav aria-label="..." >
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item " aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <fine scheda pagine-->
         <!--footer-->
            <footer class="py-3 my-4 fixed-bottom">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="loggato.php" class="nav-link px-2 text-warning">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-warning">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-warning">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-warning">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-warning">About</a></li>
            </ul>
            <p class="text-center text-warning">&copy; 2022 LibreComics, Inc</p>
            </footer>

        <!--fine footer-->
    </body>
</html>
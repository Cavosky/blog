<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        
        <title>LibreComics</title>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </head>
    <body class="bg-dark text-light z-0">
        <!--navbar-->
        <nav class="navbar bg-dark navbar-warning border border-warning-subtle sticky-top z-2 top-0 end-0 w-100">
            <div class="container-fluid">     
                <a class="navbar-brand text-warning fs-1">
                <img src=" <?php 
                                $connessione= connessione();
                                $query='SELECT path from img where id=0';
                                $risultati=$connessione->query($query);
                                $row=$risultati->fetch_assoc();
                                echo implode($row);                                
                                $connessione->close();?>" class="rounded float-start border border-warning me-2" width="50" height="50" alt="..."><h1>ibreComics</h1>
                </a>
            </div>
        </nav>
        <!--fine navbar-->
        <!--grid-->
        <div class="container-fluid position-relative text-light text-center mt-4">
            <h1>Titolo</h1>
            <div class="text-center">
                <p class="pt-3">Corpo</p>
            </div>
        </div>
         <!--footer-->
            <footer class="py-3 my-4 fixed-bottom z-0">
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
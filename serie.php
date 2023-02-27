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
        <link rel="stylesheet" href="stile.css">
        <title>LibreComics</title>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </head>
    <body class="bg-warning text-light z-0">
        <div class="container bg-dark z-1 mt-5 position-relative" style="width:60vw;height:93vh">
            <div class="position-absolute ">
            <img src=" media/<?php 
                            $connessione= connessione();
                            $query="SELECT path from img,opera where opera.id=$_GET[id] and img.id=opera.img";
                            $risultati=$connessione->query($query);
                            $row=$risultati->fetch_assoc();
                            echo implode($row);                                
                            $connessione->close();?>" class='img-fluid' style='width: 13vw ;height:40vh' alt="...">
                <h1 class="text-warning">
                    <?php
                        $connessione=connessione();
                        $query="SELECT titolo from opera where id=$_GET[id]";
                        $risultati=$connessione->query($query);
                        $row=$risultati->fetch_assoc();
                        echo implode($row);                                
                        $connessione->close();
                    ?>
                </h1>                
            </div>
            <div class="position-absolute end-50">
                <h3>Trama</h3>
            <p class="text-light">
                    <?php
                            $connessione=connessione();
                            $query="SELECT trama from opera where id=$_GET[id]";
                            $risultati=$connessione->query($query);
                            $row=$risultati->fetch_assoc();
                            echo implode($row);                                
                            $connessione->close();
                        ?>
                </p>
            </div>
            <div class="position-absolute top-50 end-0 pe-5">
                <label for="edizioni">Edizioni:</label>
                <select class="form-select" name="edizioni" aria-label="Default select example" style="width:15vw">
                    <?php
                        riempiEdizioni();
                    ?>
                </select>
            </div>
            <div class="position-absolute top-50 mt-5">
                <h3 class="text-light justify-content-center">Volumi:</h3>
                <div class="d-flex flex-row pt-2">
                    <div class='col mx-2'>
                        <div class='card bg-warning border hover-overlay' onclick='location.href=\"serie.php?id=$opera[id]\"' style='max-width: 12vw;'>
                            <img src='media/$img' class='card-img-top img-fluid' style='max-width: 100% ;height:auto' alt='foto opera'>
                            <div class='card-body'>
                                <p class='card-text text-black overflow-hidden'>$opera[titolo]</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                <?php
                    ?>
                </div>
            </div>
            
        </div>
        
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

        <!--fine footer-->
    </body>
</html>
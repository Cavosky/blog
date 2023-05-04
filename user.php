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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </head>
    <body class="bg-warning text-light z-0">
        <?php mettiInput();?>
        <div class="container bg-dark z-1 mt-5 position-relative" style="width:60vw;height:93vh">
            <div class="position-absolute ">
            <img src=" media/<?php 
                            $connessione= connessione();
                            $query="SELECT path from img,utente where utente.id=$_GET[id] and img.id=utente.profilo";
                            $risultati=$connessione->query($query);
                            $row=$risultati->fetch_assoc();
                            echo implode($row);                                
                            $connessione->close();?>" class='img-fluid' style='width: 13vw ;height:40vh' alt="...">
                <h1 class="text-warning">
                    <?php
                        $connessione=connessione();
                        $query="SELECT username from utente where id=$_GET[id]";
                        $risultati=$connessione->query($query);
                        $row=$risultati->fetch_assoc();
                        echo $row['username'];                                
                        $connessione->close();
                    ?>
                </h1>                
            </div>
            <div class="position-absolute top-50 end-0 pe-5">
                <div class="form-check form-switch">
                    <form method="post">
                       
                    </form>
                </div>
            </div>                
                <div class="d-flex flex-row">
                
                </div>
            </div>            
        </div>
    </body>
</html>
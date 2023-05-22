<?php
    include "connect.php";
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="stile.css">
        <title>LibreComics</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script>
            function formModifica(){
               $("#formModifica").show()           
            }

            function inv(){
                $("#formModifica").hide()           
            }
        </script>
    </head>
    <body class="bg-warning text-light z-0">
    <button type="button" onclick='location.href="loggato.php"' class=" btn btn-primary "><i class="fa-solid fa-arrow-left"></i></button>
        <?php mettiInput();?>
        <div class="container bg-dark z-1 mt-5 position-relative" style="width:60vw;height:93vh">
            <div class="position-absolute ">
            <img class="rounded mt-2" style='object-position: center;object-fit: cover;max-width: 100% ;height:40vh' src=" media/<?php 
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
                <button class="btn bg-primary start-100 position-absolute me-5" onclick="formModifica()">Modifica</button> 
                <div id="formModifica" class="position-absolute" style="display:none">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mt-5 mb-3">
                            <label for="exampleFormControlInput1"  class="form-label">Username:</label>
                            <input type="text" class="form-control" name="username" id="exampleFormControlInput1" value="<?php 
                                                    $connessione= connessione();
                                                    $query="SELECT username from utente where email='$_SESSION[email]'";
                                                    $risultati=$connessione->query($query);
                                                    $row=$risultati->fetch_assoc();
                                                    echo $row['username'];                                
                                                    $connessione->close();?>" >
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">foto profilo</label>
                            <input class="form-control" name="file" type="file" id="formFile" accept="image/*">
                        </div>
                        <button type="submit" name="cambiodatiutente" onclick="inv()" class="btn btn-primary btn-lg">Conferma Modifiche</button>
                    </form>              
                </div>                        
            </div>              
        </div>
    </body>
</html>
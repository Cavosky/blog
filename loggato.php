<?php
    include "connect.php";
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
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
    <body class="bg-dark text-light z-0">
        <!--navbar-->
        <nav class="navbar bg-dark navbar-warning border border-warning-subtle sticky-top z-2 top-0 end-0 w-100" style="max-height:10vh">
            <div class="container-fluid">     
                <a class="navbar-brand text-warning fs-1 pb-4">
                <img src=" media/<?php 
                                $connessione= connessione();
                                $query='SELECT path from img where id=0';
                                $risultati=$connessione->query($query);
                                $row=$risultati->fetch_assoc();
                                echo implode($row);                                
                                $connessione->close();?>" class="rounded float-start border border-warning me-2" width="50" height="50" alt="..."><h1>ibreComics</h1>
                </a>
                <form class="d-flex" role="search">
                <input class="form-control m-3" type="text" placeholder="Naviga tra Articoli" id="inputRicerca" aria-label="Cerca" style="height:5vh">
                <div class="text-end"> 
                    <img class="rounded-circle mx-3" width='50' height='50' alt="avatar" name="icona" src="media/<?php 
                                $connessione= connessione();
                                $query="SELECT path from img,utente where utente.profilo=img.id";
                                $risultati=$connessione->query($query);
                                $row=$risultati->fetch_assoc();
                                echo implode($row);                                
                                $connessione->close();
                            ?>" />

                    <button class="btn text-warning w-0  " type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                        <?php echo $_SESSION['username']?>
                    </button>

                    <div class="offcanvas text-bg-dark offcanvas-end " data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                        <div class="offcanvas-header">
                            <h3 class="offcanvas-title text-warning" id="staticBackdropLabel"> <?php echo $_SESSION['username']?></h3>
                            <img class="rounded-circle " width='75' height='75' alt="avatar" name="icona" src="media/<?php 
                                $connessione= connessione();
                                $query="SELECT path from img,utente where utente.profilo=img.id";
                                $risultati=$connessione->query($query);
                                $row=$risultati->fetch_assoc();
                                echo implode($row);                                
                                $connessione->close();
                            ?>" />
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="container-fluid position-relative h-100">
                                <div class="container-fluid start-0 position-absolute">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active text-warning" aria-current="page" href="libreria.php">Libreria</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-warning" href="#">Progressi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-warning" href="#">Link</a>
                                        </li>
                                    </ul>
                                </div>
                               <div class="position-absolute top-50  end-0">
                                    <input type="submit" name="logout" value="Logout"class="btn btn-outline-danger">                                   
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </nav>
        <!--fine navbar-->
        <!--grid-->
        <div class="container text-center mt-5" >
            <div id="articoli">        
                <?php riempiCard() ?>
                <script type="text/javascript">
                    $(document).ready(function(){                 
                        $("#inputRicerca").keyup(function(){
                            var input=$(this).val();
                            if(input != ""){
                                $.ajax({
                                    url:"connect.php",
                                    method:"POST",
                                    data:{ricerca:input},

                                    success:function(data){
                                        $("#articoli").html(data);
                                    }
                                });
                            }else{
                                $.ajax({ url: 'connect.php',
                                    data: {action: ''},
                                    type: 'post',
                                    success: function(output) {
                                                $("#articoli").html(output)
                                            }
                                    });                       
                            }
                        });
                    });
                </script>
            </div>  
         </div>
        <!--fine grid-->        
        <?php 
            if($_SESSION['ruolo']=='admin'){
                echo "<button type='button'  onclick=\"location.href='gestione/gestione.php'\" class='btn btn-primary fixed-bottom'>Gestione</button>";
            }
        ?>        
        
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
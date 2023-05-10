<?php
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </head>
    <body class="bg-dark text-light z-0" style="height:100vh">
        <!--navbar-->
        <nav class="navbar bg-dark navbar-warning border border-warning-subtle sticky-top z-2 top-0 end-0 w-100 " style="max-height:10vh">
            <div class="container-fluid">     
                <a class="navbar-brand text-warning fs-1 pb-3">
                    <img src="media/<?php 
                                $connessione= connessione();
                                $query='SELECT path from img where id=0';
                                $risultati=$connessione->query($query);
                                $row=$risultati->fetch_assoc();
                                echo implode($row);                                
                                $connessione->close();?>" class="rounded float-start border border-warning me-2" width="50" height="50" alt="..."><h1>ibreComics</h1>
                </a>
                <form class="d-flex" role="search" method="post">
                    <input class="form-control m-3" type="text" placeholder="Naviga tra Articoli" id="inputRicerca" aria-label="Cerca" style="height:5vh">                   
                    <div class="text-end">
                        <button type="button" onclick="location.href='login.php'" class="btn btn-outline-light mb-1 " style="min-width:5vw">Login</button>
                        <button type="button" onclick="location.href='registrazione.php'" class="btn btn-warning" style="min-width:5vw">Registrati</button>
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
         <!--footer-->
         <div style="margin-top:auto" ><footer class="py-3" >
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="loggato.php" class="nav-link px-2 text-warning">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-warning">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-warning">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-warning">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-warning">About</a></li>
            </ul>
            <p class="text-center text-warning">&copy; 2022 LibreComics, Inc</p>
            </footer>
        </div>
            

        <!--fine footer-->
    </body>
</html>
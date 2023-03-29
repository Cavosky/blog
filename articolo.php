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
        <nav class="navbar bg-dark navbar-warning border border-warning-subtle sticky-top z-2 top-0 end-0 w-100" style="height:10vh">
            <div class="container-fluid">     
                <a class="navbar-brand text-warning fs-1" href="loggato.php">
                <img src="media/<?php 
                                $connessione= connessione();
                                $query='SELECT path from img where id=0';
                                $risultati=$connessione->query($query);
                                $row=$risultati->fetch_assoc();
                                echo implode($row);                                
                                $connessione->close();?>" class="rounded float-start border border-warning me-2" width="50" height="50" alt="..."><h1>ibreComics</h1>
                </a>
                <form class="d-flex" role="search">

                <div class="text-end"> 
                    
                    <?php if(!empty( $_SESSION['username'])){
                        $connessione= connessione();
                        $query='SELECT path from img,utente where utente.profilo=img.id';
                         $risultati=$connessione->query($query);
                        $row=$risultati->fetch_assoc();
                        $img=implode($row);
                        echo"
                        <img class='rounded-circle mx-3' width='50' height='50' alt='avatar' name='icona' src='media/$img ' />
                     <button class='btn text-warning ' type='button' data-bs-toggle='offcanvas' data-bs-target='#staticBackdrop' aria-controls='staticBackdrop'>
                        
                                  $_SESSION[username]";
                                  $connessione->close();
                                 }                                
                            else{
                                echo '<div class="text-end">
                                <button type="button" onclick="location.href=\'login.php\'" class="btn btn-outline-light " style="min-width:5vw;">Login</button>
                                <button type="button" onclick="location.href=\'registrazione.php\'" class="btn btn-warning" style="min-width:5vw;">Registrati</button>
                            </div>';
                            }?>
                    </button>

                    <div class="offcanvas text-bg-dark offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                        <div class="offcanvas-header">
                            <h3 class="offcanvas-title text-warning" id="staticBackdropLabel"> <?php echo $_SESSION['username']?></h3>
                            <img class="rounded-circle " width='75' height='75' alt="avatar" name="icona" src="<?php echo $img?>" />
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
        <?php
            riempiArticolo();
        ?>
        <?php
            if(!empty($_SESSION['email'])){
                $connessione=connessione();
                $query="SELECT path from img,utente where id=profilo and email='$_SESSION[email]'";
                $risultati=$connessione->query($query);
                while($row=$risultati->fetch_assoc()){
                    echo "<section id='sezioneCommenti'>
                <div class='container my-5 py-5 text-dark'>
                  <div class='row d-flex justify-content-center'>
                    <div class='col-md-10 col-lg-8 col-xl-6'>
                      <div class='card'>
                        <div class='card-body p-4'>
                          <div class='d-flex flex-start w-100'>
                            <img class='rounded-circle shadow-1-strong me-3'
                              src='media/$row[path]' alt='avatar' width='65'
                              height='65' />
                            <div class='w-100'>
                              <h5>Commenta</h5>
                              <form method='post'>
                              <div class='form-outline'>
                                <textarea class='form-control' id='textAreaExample' maxlenght='16777215' rows='4' name='contenuto' required></textarea>
                                <label class='form-label' for='textAreaExample'>What is your view?</label>
                              </div>
                              <div class='d-flex justify-content-between mt-3'>
                                <button type='button' class='btn btn-danger'>Cancella</button>
                                <button type='submit' class='btn btn-success' name='inviacommentoarticolo'>
                                  Send <i class='fas fa-long-arrow-alt-right ms-1'></i>
                                </button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>";
                  }                
            };

        ?>
        <div class="d-flex flex-column align-items-center my-3">
            
        <?php
            commentiArticolo();
            
        ?>
        
        </div>
         <!--footer-->
            <footer class="py-3 my-4 ">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-warning">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-warning">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-warning">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-warning">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-warning">About</a></li>
            </ul>
            <p class="text-center text-warning">&copy; 2022 Company, Inc</p>
            </footer>
            
        <!--fine footer-->
    </body>
</html>
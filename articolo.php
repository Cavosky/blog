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
                    <img src="provvisoria.jpg" class="rounded float-start border border-warning me-2" width="50" height="50" alt="...">
                    <h1>LibreComics</h1>
                </a>
                <form class="d-flex" role="search">

                <div class="text-end"> 
                    <img class="rounded-circle mx-3" width='50' height='50' alt="avatar" name="icona" src="provvisoria.jpg" />

                    <button class="btn text-warning " type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                        <?php echo $_SESSION['username']?>
                    </button>

                    <div class="offcanvas text-bg-dark offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                        <div class="offcanvas-header">
                            <h3 class="offcanvas-title text-warning" id="staticBackdropLabel"> <?php echo $_SESSION['username']?></h3>
                            <img class="rounded-circle " width='75' height='75' alt="avatar" name="icona" src="provvisoria.jpg" />
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="container-fluid position-relative h-100">
                               <div class="position-absolute t-100  s-0">
                                    <input type="submit" name="logout" value="Logout"class="btn btn-outline-danger">                                   
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </nav>
        <div class="container d-flex justify-content-center pt-5">
            <h1 class="text-white">Titolo</h1>
        </div>
        <div class="container  justify-content-center pt-5">
            <p class="text-white">Lorem ipsum dolor sit amet. Et suscipit nihil est nesciunt numquam sit deserunt possimus et iusto aspernatur et facere nisi! Id quis perferendis ea laudantium optio rem distinctio dolore quo enim voluptates. In enim consequatur eos aliquid animi et pariatur esse sed sint cupiditate. Et asperiores autem eos voluptatem officia sed galisum doloremque. </p><p>Ut dolor perspiciatis rem accusantium dolorem et incidunt dolores qui facilis quis. Rem vitae velit ad consectetur architecto et magnam sequi ut rerum ratione ad nihil voluptates sit dolores doloremque. </p><p>Est eligendi aliquid quo quasi nisi id iusto porro qui distinctio saepe et nobis numquam qui esse similique. In accusantium veniam est nesciunt nihil ut autem distinctio qui voluptatem corporis 33 eveniet ratione ad facilis odit et ipsum maiores. Et quae molestias et velit minus qui animi exercitationem aut esse labore? Hic eius ratione quo quos nostrum cum galisum explicabo. </p>

        </div>
         <!--footer-->
            <footer class="py-3 my-4 fixed-bottom">
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
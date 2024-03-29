<?php
  include '../connect.php';
  if(!isset($_SESSION['email']) || $_SESSION['ruolo']!='admin'){
        header('location../index.php');
    }
?>
<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scrittura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-dark text-light z-0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="d-flex">

      <div class="card bg-warning text-dark text-center" style="width: 18rem;height:15vh">
        <div class="card-body">
          <h5 class="card-title">Gestione Articoli</h5>
          <p class="card-text">Visualizzazione e crud articoli</p>
          <a href="gestioneArticoli.php" class="card-link">Vai</a>
        </div>
      </div>
      
      <div class="card bg-warning text-dark text-center" style="width: 18rem;height:15vh">
        <div class="card-body">
          <h5 class="card-title">Gestione Utenti</h5>
          <p class="card-text">Visualizzazione e crud utenti</p>
          <a href="gestioneUtenti.php" class="card-link">Vai</a>
        </div>
      </div>

       <div class="card bg-warning text-dark text-center" style="width: 18rem;height:15vh">
        <div class="card-body">
          <h5 class="card-title">Gestione Opere</h5>
          <p class="card-text">Visualizzazione e crud opere</p>
          <a href="gestioneOpere.php" class="card-link">Vai</a>
        </div>
      </div>
      <a href="../loggato.php">torna alla home</button>

    </div>    
  </body>
</html>
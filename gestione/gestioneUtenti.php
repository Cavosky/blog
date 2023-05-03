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
    <script src="./gestioneUtenti.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <form method="post">
      <?php
          $connessione= connessione();
          $query='SELECT * from utente';
          $risultati=$connessione->query($query);
          $id=0;        
          while($row=$risultati->fetch_assoc()){
            echo "
              <input type='radio' id='$id' onclick='passaggioNome(\"$row[email]\")' name='email' value='$row[email]' required >
              <p class='w-50' id='$row[email]'>$row[username]</p>";
              $id++;
          }                   
          $connessione->close();
      ?>
      <input name="modificaUtente" id="mod">
      <input style="display:none" id="inv">
      <input style="display:none" id="com">
      <button type="submit" name="modificheUtente">Invia</button>
      <button type="submit" name="eliminaUtente">Elimina</button><br>
      <a href="gestione.php">torna alla gestione</a><br>
      <a href="../loggato.php">torna alla home</a>
    </form>
    <hr>
    <h1 class="text-center text-decoration-none">Commenti:</h1>
    <div id="commenti" class="d-flex flex-column align-items-center">

    </div>
    
  </body>
</html>
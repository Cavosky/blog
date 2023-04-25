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
    <script>
      function passaggioNome(id){
        document.getElementById('mod').value=document.getElementById(id).innerHTML;
        document.getElementById('modcontenuto').value=document.getElementById(id+'c').value;
      }
    </script>
    <form method="post">
    <?php
        $connessione= connessione();
        $query='SELECT * from articolo';
        $risultati=$connessione->query($query);        
        while($row=$risultati->fetch_assoc()){
          echo "
            <input type='radio' name='seleziona' onclick='passaggioNome(\"$row[id]\")' value='$row[id]' required >
            <input style='display:none' id='$row[id]c' value=\"$row[contenuto]\" required >
            <p class='w-50' id='$row[id]'>$row[titolo]</p>";
        }                   
        $connessione->close();
    ?>
    <input name="modificaArticolo" class="w-100" id="mod"><br>
    <textarea name="modificaContenuto" class='w-100' id="modcontenuto" cols="30" rows="10"></textarea>
    <button type="submit" name="modificheArticolo">Invia</button>
    <button type="submit" name="eliminaArticolo">Elimina</button><br>
    <a href="scrittura.php">Aggiungi Articolo</button><br>
    <a href="gestione.php">torna alla gestione</button><br>
    <a href="../loggato.php">torna alla home</button>
    </form>
  </body>
</html>
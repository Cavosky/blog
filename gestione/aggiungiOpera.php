<?php
  include '../connect.php';
  if(!isset($_SESSION['email']) || $_SESSION['ruolo']!='admin'){
        header('location:../index.php');
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
    <form method="post" enctype="multipart/form-data">
      <div class="mb-3">
          <label for="exampleFormControlInput1"  class="form-label">Titolo:</label>
          <input type="text" class="form-control" name="titolo" id="exampleFormControlInput1" placeholder="Titolo">
      </div>
      <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Trama:</label>
          <textarea class="form-control" name="trama" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="mb-3">
          <label for="formFile" class="form-label">Copertina</label>
          <input class="form-control" name="file" type="file" id="formFile" accept="image/*">
      </div>
      <button type="submit" name="aggiungiOpera" class="btn btn-primary btn-lg">+ aggiungi Opera</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
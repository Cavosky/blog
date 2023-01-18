<?php
include "connect.php";
  if(isset($_POST["login"])){
    if(empty($_POST["email"]) || empty($_POST["pw"])){
      $message="<p class='text-danger'>Inserire informazioni in ogni campo</p>"; 
      echo $message;
    }else{
      $email=trim($_POST["email"]);
      $pw=$_POST["pw"];
      $query="SELECT * FROM utente where email=? and pw=?";
      $risultati=$connessione->prepare($query);
      $risultati->execute( 
        array(
            $email,
            $pw
        )
      );
      $control=$risultati->fetch(PDO::FETCH_OBJ);
      if($control >0){
        $_SESSION["username"]=$username;
        header("location:loggato.php");
      }else{
        $message="<p class='text-danger'>email o password inserita non corretta</p>";
        echo $message;
      }
    }
  }
?>


<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LibreComics-Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-dark m-0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <div class="container position-relative w-30 h-40 text-warning">
       <form method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1"  class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="pw" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="login" value="invia" class="btn btn-primary">Invia</button>
      </form>
    </div>
  </body>
</html>
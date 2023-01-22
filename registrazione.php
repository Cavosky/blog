<?php
include "connect.php";

  if(isset($_POST["registration"])){
    if(empty($_POST["email"]) || empty($_POST["pw"]) || empty($_POST["cpw"])){
      $message="<p class='text-danger'>Inserire informazioni in ogni campo</p>"; 
      echo $message;
    }else{
      $email=trim($_POST["email"]);
      $username=trim($_POST["username"]);
      $pw=$_POST["pw"];
      $cpw=$_POST["cpw"];
      if(strcmp($pw,$cpw)!=0){
        $message="<p class='text-danger'>Le password non corrispondono</p>"; 
        echo $message;
        }else{
            $connessione->prepare("SELECT email,username from utente where email=':email' or username=':username'");
            $risultati=$connessione->execute(array($email,$username));
            if(!empty($risultati)){
                foreach($risultati as $data){
                    if(strcmp($data["email"],$_POST["email"])==0){
                        $message="<p class='text-danger'>email gia' in uso</p>"; 
                        break;
                    }
                    if(strcmp($data["username"],$_POST["username"])==0){
                        $message="<p class='text-danger'>username gia' in uso</p>"; 
                        break;
                    }
                }
            }else{
                $connessione->query("INSERT INTO utente (email,username,");

            }
            $risultati->free_result();
        }
    }
  }
?>


<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LibreComics-Registrazione</title>
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
          <label for="exampleInputUsername"  class="form-label">Username</label>
          <input type="input" class="form-control" name="username" id="exampleInputUsername" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="pw" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="examplecInputPassword1" class="form-label">Conferma Password</label>
          <input type="password" name="cpw" class="form-control" id="exampleInputcPassword1">
        </div>
        <button type="submit" name="registration" value="invia" class="btn btn-primary">Invia</button>
      </form>
    </div>
  </body>
</html>
<?php 
  session_start();
  $host_db="localhost";
  $user_db="root";
  $psw_db=""; 
  $nome_db="blog";

    /*try{
        $connessione= mysqli_connect($host_db,$user_db,$psw_db,$nome_db);
        if(!$connessione){
          echo "<h3 class='text-danger'>Errore connessione database</h3>";
        }
        $connessione->close();*/

    if(isset($_POST["login"])){
      $connessione= mysqli_connect($host_db,$user_db,$psw_db,$nome_db);
      if(!$connessione){
          echo "<h3 class='text-danger'>Errore connessione database</h3>";
        }
      if(empty($_POST["email"]) || empty($_POST["pw"])){// controllo campi vuoti
        $message="<p class='text-danger'>Inserire informazioni in ogni campo</p>"; 
        echo $message;
      }else{
        $email=trim($_POST["email"]);
        $pw=$_POST["pw"];
        $query="SELECT * FROM utente where email='$email' and pw='$pw'";
        $risultati=$connessione->query($query);
        if($risultati->num_rows >0){
          while($row=$risultati->fetch_assoc()){
            $_SESSION["email"]=$row['email'];
            $_SESSION["username"]=$row['username'];
            $_SESSION["ruolo"]=$row['ruolo'];
          }
          header("location:loggato.php");
        }else{
          $message="<p class='text-danger'>email o password inserita non corretta</p>";
          echo $message;
        }        
      }
      $connessione->close();
    }


    if(isset($_POST["registration"])){
      $connessione= mysqli_connect($host_db,$user_db,$psw_db,$nome_db);
      if(empty($_POST["email"]) || empty($_POST["pw"]) || empty($_POST["cpw"])){// controllo campi vuoti
        $message="<p class='text-danger'>Inserire informazioni in ogni campo</p>"; 
        echo $message;
      }else{
        $email=trim($_POST["email"]);
        $username=trim($_POST["username"]);
        $pw=$_POST["pw"];
        $cpw=$_POST["cpw"];
        if(strcmp($pw,$cpw)!=0){// controllo corrispondenza password
          $message="<p class='text-danger'>Le password non corrispondono</p>"; 
          echo $message;
          }else{// controllo univocita' email e username
            $query="SELECT email,username from utente where email=':email' or username=':username'";
              $risultati=$connessione->query($query);
              if($risultati->num_rows>0){
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
                  $connessione->query("INSERT INTO utente (email,username,pw) VALUES('$email','$username','$pw')");
                  $_SESSION["email"]=$email;
                  $_SESSION["username"]=$username;
                  $_SESSION["ruolo"]=$ruolo;
                  header("Location:loggato.php");
              }
          }
      }
      $connessione->close();
    }

    if(isset($_REQUEST['logout'])){      
      header('location:index.php');
    }

    if(isset($_REQUEST['pubblica'])){
      $connessione= mysqli_connect($host_db,$user_db,$psw_db,$nome_db);
        if(!$connessione){
          echo "<h3 class='text-danger'>Errore connessione database</h3>";
        }
        if(empty($_POST['titolo'] )|| empty($_POST['contenuto'] )){
          $message="<p class='text-danger'>Inserire informazioni in ogni campo</p>"; 
          echo $message;
        }else{
          $titolo=$_POST['titolo'];
          $contenuto=$_POST['contenuto'];
          if(empty(($_FILES['copertina']['name']))) {
              $connessione->query("INSERT into articolo (titolo,contenuto,img) values ('$titolo','$contenuto',(select id from img where path='provvisoria.jpg'))");           
          }/*else{
            $img=$_FILES['copertina'];
            $connessione->query("INSERT into articolo (")
          }*/
          header("location:loggato.php");
        }
        $connessione->close();
    }


?>
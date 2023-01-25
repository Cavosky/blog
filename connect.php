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
              $connessione->query("INSERT into articolo (titolo,contenuto,img) values ('$titolo','$contenuto',(select id from img where path='prova.jpg'))");           
          }/*else{
            $img=$_FILES['copertina'];
            $connessione->query("INSERT into articolo (")
          }*/
          header("location:loggato.php");
        }
        $connessione->close();
    }

    function riempiCard(){
        $img=0;
        $connessione= mysqli_connect('localhost','root','','blog');
        if(!$connessione){
          echo "<h3 class='text-danger'>Errore connessione database</h3>";
        }
        $query="SELECT * from articolo order by id desc";
        $risultati=$connessione->query($query);
        if($risultati->num_rows>18){

        }else{
          $i=0;
          $j=-2;
          while($card=$risultati->fetch_assoc()){
            if($i%3==0 || $i==0){
              echo "<div class='row mb-3'>";
            }
            $query="SELECT path from img where id='$card[img]'";
            $result=$connessione->query($query);
            $img = $result->fetch_array()[0];
            //stampa card
              echo "
              <div class='col bg-dark'>
                <div class='card mb-3 bg-warning' style='max-width: 540px;'>
                          <div class='row g-0'>
                              <div class='col-md-4'>
                                  <img src=\"$img\" class='img-fluid rounded-start ' alt='...'>
                              </div>
                              <div class='col-md-8'>
                                  <div class='card-body bg-warning text-dark '>
                                      <h5 class='card-title'>\"$card[titolo]\"</h5>
                                      <p class='card-text'>\"$card[contenuto]\"</p>
                                      <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>";   
              if($j%3==0){
              echo "</div>";
            }
            $i++;
            $j++;
        }       
      }
        $connessione->close();
    }
?>
<?php 
  session_start();

  function connessione(){
    $host_db="localhost";
    $user_db="root";
    $psw_db=""; 
    $nome_db="blog";
    $connessione= mysqli_connect($host_db,$user_db,$psw_db,$nome_db);
    if(!$connessione){
      echo "<h3 class='text-danger'>Errore connessione database</h3>";
    }
    return $connessione;
  }
  

    /*try{
        
        $connessione->close();*/

    if(isset($_POST["login"])){
      $connessione=connessione();
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
      $connessione=connessione();
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
                  header("Location:login.php");
              }
          }
      }
      $connessione->close();
    }

    if(isset($_REQUEST['logout'])){      
      header('location:index.php');
    }



    if(isset($_REQUEST['pubblica'])){
      $connessione=connessione();
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
        $connessione=connessione();
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
             
                <div class='col-auto bg-dark'>
                  <div class='card mb-3 bg-warning overflow-hidden' style='max-width: 410px;max-height:200px'>
                            <div class='row g-0'>
                                <div class='col-md-4'>
                                    <img src=\"$img\" class='img-fluid rounded-start stai' alt='...'>
                                </div>
                                <div class='col-md-8'>
                                    <div class='card-body bg-warning text-dark '>
                                        <a class='card-link text-decoration-none' href='articolo.php?id=$card[id]' onclick='document.getElementById('$i').submit(); return false;'><h5 class='card-title'>$card[titolo]</h5></a>
                                        <p class='card-text '>$card[contenuto]</p>                     
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
    
    function riempiOpere(){
        $connessione=connessione();
        $query="SELECT * from opera order by titolo asc";
        $risultati=$connessione->query($query);
        $i=0;
        $j=-2;
        while($opera=$risultati->fetch_assoc()){
            if($i%3==0 || $i==0){
              echo "<div class='row my-3'>";
            }
            $query="SELECT path from img where id='$opera[img]'";
            $result=$connessione->query($query);
            $img = $result->fetch_array()[0];
            //stampa card
              echo "
                  <div class='col'>
                    <div class='card bg-warning border hover-overlay' style='max-width: 18rem;'>
                        <img src='media/$img' class='card-img-top stai' style='max-width: 18rem;max-height:18rem' alt='foto opera'>
                        <div class='card-body'>
                            <p class='card-text text-black overflow-hidden'>$opera[titolo]</p>
                        </div>
                    </div>
                </div>
              ";
              if($j%3==0){
              echo "</div>";
            }
            $i++;
            $j++;
        }       

        $connessione->close();
    }

    function riempiSeguite(){
        $connessione=connessione();
        $query="SELECT opera.titolo,opera.img,opera.id from opera,utentesegueopera as uso where opera.id=uso.opera and uso.utente=(select email from utente where email='$_SESSION[email]') order by titolo asc";
        $risultati=$connessione->query($query);
        $i=0;
        $j=-2;
        while($opera=$risultati->fetch_assoc()){
            if($i%3==0 || $i==0){
              echo "<div class='row my-3'>";
            }
            $query="SELECT path from img where id='$opera[img]'";
            $result=$connessione->query($query);
            $img = $result->fetch_array()[0];
            //stampa card
              echo "
                  <div class='col'>
                    <div class='card bg-warning border hover-overlay' style='max-width: 12vw;'>
                        <img src='media/$img' class='card-img-top stai' style='max-width: 12vw;max-height:18rem' alt='foto opera'>
                        <div class='card-body'>
                            <p class='card-text text-black overflow-hidden'>$opera[titolo]</p>
                        </div>
                    </div>
                </div>
              ";
              if($j%3==0){
              echo "</div>";
            }
            $i++;
            $j++;
        }       

        $connessione->close();
    }
    if(isset($_REQUEST['articolo'])){
        $connessione=connessione();
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

    function riempiArticolo(){
      $connessione=connessione();
      $query="SELECT * from articolo where id='$_GET[id]'";
      $result=$connessione->query($query);
      $art = $result->fetch_array();
      echo "<div class='container d-flex justify-content-center pt-5'>
      <h1 class='text-white pb-4'>$art[titolo]</h1>
      </div>
      <img alt='prova' class='border border-warning position-absolute m-5 stai ' style='max-height:30vh;max-width:20vw ' src='prova.jpg' >
      <div class='container  border justify-content-center pt-5 ' style='min-height:60vh;max-width:37vw'>
      <p class='text-white '>$art[contenuto]</p>

  </div>";
      $connessione->close();
    }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
  

   

    if(isset($_POST["login"])){
      $connessione=connessione();
      if(empty($_POST["email"]) || empty($_POST["pw"])){// controllo campi vuoti
        $message="<p class='text-danger'>Inserire informazioni in ogni campo</p>"; 
        echo $message;
      }else{
        $email=trim($_POST["email"]);
        $pw=$_POST["pw"];
        $prot=$connessione->prepare("SELECT * FROM utente where email=?");
        $prot->bind_param("s",$email);
        $prot->execute();
        $risultati=$prot->get_result();
        if($risultati->num_rows >0){
          while($row=$risultati->fetch_assoc()){            
            if(password_verify($pw,$row['pw'])){
              $_SESSION["email"]=$row['email'];
              $_SESSION["username"]=$row['username'];
              $_SESSION["ruolo"]=$row['ruolo'];
              header("location:loggato.php");
            }
          }          
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
        $pw=$_POST['pw'];
        $cpw=$_POST["cpw"];
        if(strcmp($pw,$cpw)!=0){// controllo corrispondenza password
          $message="<p class='text-danger'>Le password non corrispondono</p>"; 
          echo $message;
          }else{// controllo univocita' email e username
            $query="SELECT email,username from utente where email=? or username=?";
            $prot=$connessione->prepare($query);
            $prot->bind_param("ss",$email,$username);
            $prot->execute();
            $risultati=$prot->get_result();
            if($risultati->num_rows>0){
              foreach($risultati as $data){
                  if(strcmp($data["email"],$_POST["email"])==0){
                    $message="<p class='text-danger'>email gia' in uso</p>"; 
                    echo $message;
                    break;
                  }
                  if(strcmp($data["username"],$_POST["username"])==0){
                    $message="<p class='text-danger'>username gia' in uso</p>"; 
                    echo $message;
                    break;
                  }
              }
            }else{
              $pw=password_hash($_POST["pw"],PASSWORD_DEFAULT);
              $prot=$connessione->prepare("INSERT INTO utente (email,username,pw) VALUES(?,?,?)");
              $prot->bind_param("sss",$email,$username,$pw);
              $prot->execute();
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
              $prot=$connessione->prepare("INSERT into articolo (titolo,contenuto,img) values (?,?,(select id from img where path='prova.jpg'))");
              $prot->bind_param("ss",$titolo,$contenuto);
              $prot->execute(); 
          }/*else{
            $img=$_FILES['copertina'];
            $connessione->query("INSERT into articolo (")
          }*/
          header("location:../loggato.php");
        }
        $connessione->close();
    }


    
    function riempiCard(){
        $connessione=connessione();
        $query="SELECT * from articolo order by id desc";
        $risultati=$connessione->query($query);
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
                  <div class='card mb-3 bg-warning overflow-hidden' onclick='location.href=\"articolo.php?id=$card[id]\"' style='max-width: 410px;max-height:200px'>
                            <div class='row g-0'>
                                <div class='col-md-4'>
                                    <img src=\"media/$img\" class='img-fluid rounded-start' style='max-width: 100% ;height:auto' alt='...'>
                                </div>
                                <div class='col-md-8'>
                                    <div class='card-body bg-warning text-dark '>
                                        <h5 class='card-title '>$card[titolo]</h5>
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
              echo "<div class='row my-3 gx-5 align-items-center w-100'>";
            }
            $query="SELECT path from img where id='$opera[img]'";
            $result=$connessione->query($query);
            $img = $result->fetch_array()[0];
            //stampa card
              echo "
                  <div class='col'>
                      <div class='card bg-warning border hover-overlay' onclick='location.href=\"serie.php?id=$opera[id]\"' style='max-width: 12vw;'>
                          <img src='media/$img' class='card-img-top img-fluid' style='max-width: 100% ;height:auto' alt='foto opera'>
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

      function riempiOpereSelected($input){
        $connessione=connessione();
        $param="%{$input}%";    
        $query="SELECT * FROM opera where titolo LIKE ? or trama LIKE ?";
        $prot=$connessione->prepare($query);
        $prot->bind_param("ss",$param,$param);        
        $prot->execute();
        $risultati=$prot->get_result();
        $i=0;
        $j=-2;
        if($risultati->num_rows >0){
          while($opera=$risultati->fetch_assoc()){
              if($i%3==0 || $i==0){
                echo "<div class='row my-3 align-items-center'>";
              }
              $query="SELECT path from img where id='$opera[img]'";
              $result=$connessione->query($query);
              $img = $result->fetch_array()[0];
              //stampa card
                echo "
                    <div class='col'>
                      <div class='card bg-warning border hover-overlay' onclick='location.href=\"serie.php?id=$opera[id]\"' style='max-width: 12vw;'>
                          <img src='media/$img' class='card-img-top img-fluid' style='max-width: 100% ;height:auto' alt='foto opera'>
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
        }else{
          echo "<h6 class='text-danger'>Nessun articolo trovato</h6>";
        }
        $connessione->close();
    }

    if(isset($_POST['opere'])){
        riempiOpereSelected($_POST['opere']);
    }
    if(isset($_POST['opereTutte'])){
        riempiOpere();
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
                    <div class='card bg-warning border hover-overlay' onclick='location.href=\"serie.php?id=$opera[id]\"' style='max-width: 12vw;'>
                        <img src='media/$img' class='card-img-top img-fluid' style='max-width: 100% ;height:auto' alt='foto opera'>
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
    if(isset($_REQUEST['action'])){
        riempiCard();
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
      $query="SELECT * from articolo,img where articolo.id='$_GET[id]' and articolo.img=img.id";
      $result=$connessione->query($query);
      $art = $result->fetch_array();
      echo "<div class='container d-flex justify-content-center pt-5'>
      <h1 class='text-white text-center  pb-4 '>$art[titolo]</h1>
      </div>
      <img alt='prova' class='border border-warning position-absolute m-5  ' style='max-width: 20vw ;max-height:35vh' src='media/$art[path]' >
      <div class='container  border justify-content-center text-center pt-5 ' style='min-height:60vh;max-width:37vw'>
      <p class='text-white '>$art[contenuto]</p>

    </div>";
      $connessione->close();
    }

    function riempiCardSelect($input){
        $connessione=connessione();
        $param="%{$input}%";    
        $query="SELECT * FROM articolo where titolo LIKE ? or contenuto LIKE ?";
        $prot=$connessione->prepare($query);
        $prot->bind_param("ss",$param,$param);        
        $prot->execute();
        $risultati=$prot->get_result();
          $i=0;
          $j=-2;
          if($risultati->num_rows >0){
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
                    <div class='card mb-3 bg-warning overflow-hidden' onclick='location.href=\"articolo.php?id=$card[id]\"' style='max-width: 410px;max-height:200px'>
                              <div class='row g-0'>
                                  <div class='col-md-4'>
                                      <img src=\"media/$img\" class='img-fluid rounded-start' style='max-width: 100% ;height:auto' alt='...'>
                                  </div>
                                  <div class='col-md-8'>
                                      <div class='card-body bg-warning text-dark '>
                                          <h5 class='card-title '>$card[titolo]</h5>
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
        }else{
        echo "<h6 class='text-danger'>Nessun articolo trovato</h6>";
        } 
        $connessione->close();
    }

    if(isset($_POST['ricerca'])){
      riempiCardSelect($_POST['ricerca']);
  }

  function riempiEdizioni(){
    $connessione=connessione();
    $query="SELECT edizione.id as ided,opera.titolo as opna,edizione.nome as edna from opera,edizione where opera.id=$_GET[id] and opera.id=edizione.opera ";
    $risultati=$connessione->query($query);
    while($row=$risultati->fetch_assoc()){
      echo "<option value='$row[ided]'>$row[opna] $row[edna]</option>";
    }
    $connessione->close();
  }

  function commentiArticolo(){
    $connessione=connessione();
    $query="SELECT * from commentiArticoli where articolo=$_GET[id]";
    $risultati=$connessione->query($query);    
    while($row=$risultati->fetch_assoc()){
      $query="SELECT username,path from utente,img where email='$row[utente]' and id=profilo";
      $result=$connessione->query($query);
      $arr=$result->fetch_assoc();
      $utente=$arr['username'];
      //$data=date_diff(getdate(),$row['pubblicazione']);
      echo "<div class='card mb-3' style='width:30vw'>
      <div class='card-body'>
        <div class='d-flex flex-start'>
          <img class='rounded-circle shadow-1-strong me-3'
            src='media/$arr[path]' alt='avatar' width='40'
            height='40' />
          <div class='w-100'>
            <div class='d-flex justify-content-between align-items-center mb-3'>
              <h6 class='text-primary fw-bold mb-0'>
                $utente
                <span class='text-dark ms-2'>$row[contenuto]</span>
              </h6>
              <p class='mb-0 text-dark'></p>
            </div>
            <div class='d-flex justify-content-between align-items-center'>
              <p class='small mb-0' style='color: #aaa;'>
                <a href='#!' class='link-grey'>Reply</a> 
              </p>
              <div class='d-flex flex-row'>
                <i class='fas fa-star text-warning me-2'></i>
                <i class='far fa-check-circle' style='color: #aaa;'></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>";
    }
    $connessione->close();
  }

  if(isset($_REQUEST['inviacommentoarticolo'])){
    $connessione=connessione();
    $query="INSERT INTO commentiarticoli (utente,articolo,contenuto) values ('$_SESSION[email]','$_GET[id]',?)";
    $prot=$connessione->prepare($query);
    $prot->bind_param("s",$_POST['contenuto']);
    $prot->execute();
    header("location.href:articolo.php?$_GET[id]#sezioneCommenti");
    $connessione->close();
  }

  if(isset($_REQUEST['eliminaArticolo'])){
    $connessione=connessione();
    $query="DELETE from articolo where id=$_POST[seleziona]";
    $connessione->query($query);
    $connessione->close();
  }
  ?>
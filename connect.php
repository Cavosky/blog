<?php session_start();
  $host_db="localhost";
  $user_db="root";
  $psw_db=""; 
  $nome_db="blog";
  try{
    $connessione= new PDO("mysql:host=$host_db; dbname=$nome_db",$user_db,$psw_db);
    $connessione->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     }
  catch(PDOException $error){
    $message=$error->getMessage();
  }
?>
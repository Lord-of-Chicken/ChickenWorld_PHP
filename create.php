<?php

  // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //identifiants mysql
    include 'db.php';

    //variable POST
    $date = $_POST["date"]; 
    $name = $_POST["name"];
    $mail = $_POST["mail"]; 
    $message = $_POST["message"];

//Ouvrir une nouvelle connexion au serveur MySQL
include 'db.php';    
//Afficher toute erreur de connexion
    if ($conn->connect_error) {
      die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
    }  
    
//préparer la requête d'insertion SQL
    $statement = $conn->prepare("INSERT INTO `ChickenMessages`(`date`, `name`, `mail`, `message`) VALUES (?,?,?,?)"); 
    
//Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('ssss', $date, $name, $mail, $message); 
    
//Phrase insertion ok (a améliorer)  
    if($statement->execute()){
      echo '<p>' . "Salut " . $name . "!, votre adresse e-mail est ". $mail . '</p>';
    }else{
      echo $conn->error; 
    }
  }
  $conn->close();
  header("location: message.php");
?>
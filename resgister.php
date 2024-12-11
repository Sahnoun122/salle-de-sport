<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
   
   include 'connection.php';



//    $activite = $_POST['activite'];
//    $description $_POST['description'];
//    $capacite = $_POST['capacite'];
//    $date_debut = $_POST['date_debut'];
//    $date_fin = $_POST['date_fin'];


    if(isset($_POST['submit'])){
        
   $nom=$_POST['nom'];
   $prenom = $_POST['prenom'];
   $email = $_POST['email'];
   $phone =$_POST['phone'];
      
   $requete = "INSERT INTO member( nom, prenom, email, telephone) VALUES ('$nom' , '$prenom' ,'$email', '$phone')";
   
   $query = mysqli_query($conn,$requete);
   echo"insere la requete";
   header("location:index.php");

    }else{
        echo "<h1> non insere la requete </h1>";
    }

?>


</body>
</html>
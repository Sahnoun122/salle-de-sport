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
if(isset($_GET['id'])){

}else{

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $activite = $_POST['activite'];
    // $date_reservation = $_POST['date_reservation'];

    $requete1 = "INSERT INTO member (nom, prenom, email, telephone) VALUES ('$nom', '$prenom', '$email', '$phone')";
    $query1 = mysqli_query($conn, $requete1);

    if ($query1) {
        $id_membre = mysqli_insert_id($conn);

        $requete_act = "SELECT id_activite FROM activites WHERE nom_activite='$activite'";
        $query_act = mysqli_query($conn, $requete_act);
        $rows = mysqli_fetch_assoc($query_act);
        $id_activite = $rows['id_activite'];

        $requete2 = "INSERT INTO reservation (id_member,id_activite,date_reservation) VALUES ('$id_membre','$id_activite',CURRENT_TIMESTAMP)";
        $query2 = mysqli_query($conn, $requete2);

        if ($query2) {
            echo "Inséré la requête";
            header("Location: index.php");
            
        } else {
            echo "<h1>Échec de l'insertion de la réservation</h1>";
        }
    } else {
        echo "<h1>Échec de l'insertion du membre</h1>";
    }
} else {
    echo "<h1>Non inséré la requête</h1>";
}

}



?>

</body>
</html>
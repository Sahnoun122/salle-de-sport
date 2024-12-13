<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
</head>
<body>
    

  <h1>affichage data</h1><hr>
<table border="1">
  <tr>
    <th>nom</th>
    <th>prenom</th>
    <th>nom activité</th>
    <th>date de réservation</th>
    <th>status de réservation</th>
    <th>ACTION</th>


  </tr>



  

<?php

include 'connection.php';

$requet = "SELECT M.id_member, M.nom, M.prenom, A.nom_activite, R.date_reservation, R.statut
           FROM member M
           JOIN reservation R ON M.id_member = R.id_member
           JOIN activites A ON A.id_activite = R.id_activite
           ORDER BY M.id_member";

$quey = mysqli_query($conn, $requet);

if ($quey) {
    while ($rows = mysqli_fetch_assoc($quey)) {
      $id_member =$rows['id_member'];
        echo "<tr>";
        echo "<td >" . $rows['nom'] . "</td>";
        echo "<td>" . $rows['prenom'] . "</td>";
        echo "<td>" . $rows['nom_activite'] . "</td>";
        echo "<td>" . $rows['date_reservation'] . "</td>";
        echo "<td>" . $rows['statut'] . "</td>";
        echo "<td>
                <a href='index.php?id=" . $id_member. "'> modifier </a>
                <a href='delete.php?id=" . $id_member. "'> supprimer </a>
              </td>";
        echo "</tr>";
    }
} else {
    echo "Erreur : " . mysqli_error($conn);
}

mysqli_close($conn);
?>


</table>
</body>
</html>
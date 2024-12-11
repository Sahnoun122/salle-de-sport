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
    <th>email</th>
    <th>telephone</th>
  </tr>
   <?php

      require 'connection.php';

      $requete = "SELECT * from member ";
      $query = mysqli_query($conn, $requete);
       
      while($rows = mysqli_fetch_assoc($query)){
        $id=$rows['id'];
        echo "<tr>";
        echo "<td>".$rows['nom']. "</td>";
        echo "<td>".$rows['prenom']. "</td>";
        echo "<td>".$rows['email']. "</td>";
        echo "<td>".$rows['phone']. "</td>";
        echo "<td><a href='update.php'> modification </a></td>";
        echo "<td><a href='delete.php?id=".$id."'> supprimer </a></td>";
        echo "</tr>";
      

      }

?>

</table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>read</title>
</head>
<body>
    


<div class="">
  

<h1 class="text-3xl text-center font-extrabold dark:text-white mb-10 mt-10 ">Affichage les donnes</h1>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                     name
                </th>
                <th scope="col" class="px-6 py-3">
                    prenom
                </th>
                <th scope="col" class="px-6 py-3">
                    activite
                </th>
                <th scope="col" class="px-6 py-3">
                    reservation
                </th>
                <th scope="col" class="px-6 py-3">
                    statut
                </th>
                <th scope="col" class="px-6 py-3">
                    action
                </th>
                
    

  

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
        echo'<tbody> <td class="px-6 py-4">';

        
        echo "<tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>";
        echo '  <td class="w-4 p-4">';
                  echo'  <div class="flex items-center">';
                   echo '  </div>';
                echo '</td>';
        echo "<td class='px-6 py-4'>" . $rows['nom'] . "</td>";
        echo "<td class='px-6 py-4'>" . $rows['prenom'] . "</td>";
        echo "<td class='px-6 py-4'>" . $rows['nom_activite'] . "</td>";
        echo "<td class='px-6 py-4'>" . $rows['date_reservation'] . "</td>";
        echo "<td class='px-6 py-4'>" . $rows['statut'] . "</td>";
        echo '</td>';
        echo "<td>
                <a href='index.php?id=" . $id_member. "'  class='font-medium text-blue-600 dark:text-blue-500 hover:underline'> modifier </a>
                <a href='delete.php?id=" . $id_member. "' class='font-medium text-red-600 dark:text-red-500 hover:underline ms-3'> supprimer </a>
              </td>";
        echo "</tbody>";

    }
} else {
    echo "Erreur : " . mysqli_error($conn);
}

mysqli_close($conn);
?>

</table>
</div>
</body>
</html>
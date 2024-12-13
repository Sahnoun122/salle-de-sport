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

    
    $id_member =$_GET ['id'];
     $sql = "DELETE FROM reservation where id_member= '$id_member' ";
     $query =mysqli_query($conn, $sql);
     if(isset($query)){
        echo "<h1> suppression avec success </h1>";
        header("location:read.php");
    }else{
        echo "<h1>erreur</h1>";
        }

?>

</body>
</html>
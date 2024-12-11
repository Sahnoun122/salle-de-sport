<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
    
     require 'connection.php';
     $id =$_GET ['id'];
     $sql = "DELETE FROM member where id= '$id' ";
     $query =mysqli_query($conn, $sql);
     if(isset($query)){
     
    }

?>

</body>
</html>
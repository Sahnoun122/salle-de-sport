<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php


   
$host = 'localhost';
$user='root';
$pass='';
$db='sport';
$conn= new mysqli($host, $user, $pass, $db);

if($conn -> connect_error){
     die('sorry not connecte' .$conn-> connect_error);
 }


?>
</body>
</html>
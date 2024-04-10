<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>
 
<?php
 
$email = $_GET['email'];
$passw = $_GET['password'];
 
session_start();
 
$_SESSION['email'] = $email;
 
echo "Email: " . $_SESSION['email'];
 
?>
   
<?php
session_start();
if(!$_SESSION['pasword']){
    header('Location:login.php');
}
echo $_SESSION['email'];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="deconnexion.php">
        <button>se deconnecter</button>
    </a>

    
</body>
</html>


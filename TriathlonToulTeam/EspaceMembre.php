<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bienvenue <?php echo $_SESSION['user']['username']; ?> !
    <a href="logout.php">Se déconnecter</a>
    
</body>
</html>
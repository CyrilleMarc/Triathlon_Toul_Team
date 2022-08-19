<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>

<?php
if(isset($_SESSION[Nom])){
    destroySession();
}

echo "<br><div class="center">You are now logged out. Please <a href='index.php'>click here</a> to log back in.</div>";
?>

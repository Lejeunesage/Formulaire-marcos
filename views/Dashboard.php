<?php
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
    <h1>Bonjour <?php echo $_GET["username"] ?? '' ?>, bienvenue sur LEARN JS</h1>
    <p>Ton nom est :<?php echo $_GET["userfirstname"] ?? '' ?> </p>
    <p>Ton prénom est: <?php echo $_GET["userlastname"] ?? '' ?> </p>
    <p>Ton mot de passe crypté est:<?php echo $_GET["passcrypt"] ?? '' ?>  </p>
</body>

</html>
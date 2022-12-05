<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b48549a02e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="sig_in_page.css">
    <link rel="stylesheet" href="../asset/style.css">
    <title>Login Page</title>
</head>

<body>
    <main>
        <div class="block_formulaire">
            <h1>Learn JS | Connexion</h1>
            <form action="../controllers/login.inc.php" method="post">
                <input type="email" name="Email" value="<?php echo $_GET["usermail"] ?? '' ?>" placeholder="email" ><br>

                <input type="password" name="password" placeholder="password" ><br>
                
                <button type="submit" name="connexion">Se connecter</button>
                <button type="reset">Raffraichir la page</button>
                <p>Nouveau sur Learn JS ? <a href="./Sig_up.php">créer un compte</a></p>
            </form>
        </div>
    </main>

</body>

</html>
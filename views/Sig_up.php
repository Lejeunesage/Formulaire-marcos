       <!DOCTYPE html>
       <html lang="en">

       <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Document</title>
           <link rel="stylesheet" href="sig_up_page.css">
           <link rel="stylesheet" href="../asset/style.css">
       </head>

       <body>
           <div class="block_formulaire">
               <h1>Learn JS | Inscription</h1>
               <form action="../controllers/register.inc.php" method="post">
                   <input type="text" name="firstname" placeholder="firstname" value="<?php echo $_GET["userfirstname"] ?? '' ?>"><br>

                   <input type="text" name="lastname" placeholder="lastname" value="<?php echo $_GET["userlastname"] ?? '' ?>"><br>

                   <input type="text" name="username" placeholder="username" value="<?php echo $_GET["username"] ?? '' ?>"><br>

                   <input type="email" name="email" value="<?php echo $_GET["useremail"] ?? '' ?>" placeholder="email"><br>

                   <input type="password" name="password" value="<?php echo $_GET["password"] ?? '' ?>" placeholder="password"><br>

                   <input type="password" name="password-confirm" placeholder="confirm your password"><br>

                   <button type="submit" name="register">S'inscrire</button>
                   
                   <button type="reset" name="reset">Raffraichir</button>
                   <p>Déja inscrit ? <a href="./Sig_in.php">Connectez-vous</a></p>
               </form>
           </div>

       </body>

       </html>
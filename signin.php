<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signin.css">
    <title>Créer son compte</title>
</head>
<body>
<div class="page-root">
        <div class="login-form">
            <h1>Question pour un café ! </h1>
            <form action="includes/inscription.php" method="POST">
                <div class="form-name">
                    <div class="form-label">
                        <label for="name"> Prénom  </label>
                    </div>
                    <input type="name" name="name">
                </div>
                <div class="form-email">
                    <div class="form-label">
                        <label for="Email"> Email</label>
                    </div>
                    <input type="email" name="email">
                </div>
                <div class="form-password">
                <div class="form-label">
                    <label for="password"> Mot de passe</label>
                </div>
                    <input type="text" name="password">
                </div>
                <div class="form-button">
                <button class="btn" name="submitSignin"> S'inscrire </button>
                </div>
            </form>
        </div>
        <div class="footer-link">
            <div class="footer-root">
                <div class="span-af-form">
                    <span><a href="#">© Question Pour un café </a></span>
                    <span><a href="#">Contact</a></span>
                    <span><a href="#">RGPD</a></span>
                </div>
            </div>
        </div>
    </div>
    <?php

    include('includes/inscription.php');

    ?>
</body>
</html>
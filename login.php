<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>

    <div class="page-root">
        <div class="login-form">
            <h1>Question pour un café ! </h1>
            <form action="" method="POST">
                <div class="form-name">
                    <div class="form-label">
                        <label for="Email"> Email</label>
                    </div>
                    <input type="text" name="Email">
                </div>
                <div class="form-password">
                <div class="form-label">
                    <label for="password"> Mot de passe</label>
                </div>
                    <input type="text" name="password">
                </div>
                <div class="form-button">
                <button class="btn"> Se connecter </button>
                </div>
            </form>
        </div>
        <div class="footer-link">
            <div class="footer-root">
                <div class="signup">
                    <span> Pas de compte ? <a href="#"> Créer le !</a></span>
                </div>
                <div class="span-af-form">
                    <span><a href="#">© Question Pour un café </a></span>
                    <span><a href="#">Contact</a></span>
                    <span><a href="#">RGPD</a></span>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js "></script>
    <audio autoplay loop> 
        <source src="assets/qpc-intro.mp3">
    </audio>
</body>
</html>
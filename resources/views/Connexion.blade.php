<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTC-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>COLLECTIF DES ETUDIANTS POUR LE CHANGEMENT</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body>

        <header>
            <h2 class="logo">Logo </h2>
            <nav class="navigation">
                <a href="#">Accueil</a>
                <a href="#">à propos</a>
                <a href="#">Contacts</a>
                <button  class="btnLogin-popup">Login</button>
            </nav>
        </header>
          <img class="fond_page" href="C:\Users\HP\Desktop\C.E.C\Collectif.jpeg">

        <div class="wrapper">
            <!-- <span class="icon-close">
                <ion-icon name="close-outline"></ion-icon>
            </span> -->
           <div class="form-box Login">
            <h2>Login</h2>
            <form method="post" action="Connexion">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>mot de passe</label>
                </div>
                <!-- <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div> -->
                <button type="submit"  class="btn">Login</button>
                <div class="Login-register">
                    <p>Don't have an account ?<a href="Inscription" class="register-link">Register</a></p>
                </div>
            </form>
           </div> 

          
    
           </div>
        </div>



        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
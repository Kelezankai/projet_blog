<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTC-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>COLLECTIF DES ETUDIANTS POUR LE CHANGEMENT</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <header>
        <h2 class="logo">Logo </h2>
        <nav class="navigation">
            <a href="#">Accueil</a>
            <a href="#">à propos</a>
            <a href="#">Services</a>
            <a href="#">Contacts</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>
  

    <div class="wrapper">

        <div class="form-box Login">
           <h2>Login</h2>

          <form action="{{ url('livres/Connexion') }}" method="POST">
            @csrf
           <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" required>
                <label>Email</label>
           </div>
 
          <div class="input-box">
                <input type="password" required>
                <label>mot de passe</label>
           </div>
           <button type="submit" class="btn">Se connecter</button>
           <div class="Login-register">
               <p>Don't have an account ?<a href="Inscription" class="register-link">Inscription</a></p>
           </div>
          </form>
            @csrf
       </div>


   
    </div>
   




    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
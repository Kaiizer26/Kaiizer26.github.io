<?php ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scal=1.0">
        <link rel="stylesheet" href="../css/style.css"> 
        <link rel="icon" href="images/989c31eebd5af6a3a823879b6b3ac429.svg">
    </head>
    <body>
        <!-- Header ---------------- -->
        <header id="header">
            <a href="index.php" id="header-dylan">Dylan Zakaharinivo</a>
            <div id="header-milieu">
                <a href="../index.php">Accueil</a>
                <a href="../index.php#a-propos">A propos</a>
                <a href="../index.php#competences">Compétences</a>
                <!-- <a href="#header">Portfolio</a> -->
                <a href="#header">Contact</a>
            </div>
            <a href="https://github.com/Kaiizer26"><img src="images/github.256x249.png" alt="logo github"></a>
        </header>

        <!-- Nav Contact Hero Banner --------------- -->
        <nav id="nav-contact">
            <h2>Me contacter</h2>
            <hr>
            <p>Dites bonjour <span class="wave"> 👋🏼</span></p>
            <div class="starter-template">
                <form action="post_contact.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="Name" class="form-control" id="input-name" maxlength="100" placeholder="Votre nom">
                        <label for="input-name"></label>
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" class="form-control" id="input-email" maxlength="100" placeholder="Votre email">
                        <label for="input-email"></label>
                    </div>

                    <div class="form-group" id="contact-message">
                        <textarea type="text" name="message" class="form-control" id="input-message" maxlength="1000" rows="5" cols="5" placeholder="Ecrivez votre message"></textarea>
                        <label for="input-message"></label>
                    </div>
                </form>
            </div>
            <div class="footer-contact">
                <div class="reseaux">
                    <a href="https://www.linkedin.com/in/dylan-zakaharinivo-84860b291/">
                        <img src="../images/free-linkedin-48-189774.svg" alt="linkedin">
                    </a>
                    <a href="https://www.instagram.com/landy.zk">
                        <img src="../images/insta.svg" alt="instagram" class="autres-images">
                    </a>
                </div>
                <button id="btn-submit">Envoyer</button>
            </div>
            
        </nav>
        <!-- Main A propos ----------------- -->
      
    </body>
</html>


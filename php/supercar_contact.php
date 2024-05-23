<!DOCTYPE HTML>

<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire de contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_formulaire_contact.css">
    <link rel="stylesheet" type="text/css" href="../style/header_css.css">
    <link rel="stylesheet" type="text/css" href="../style/footer_css.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800&display=swap" rel="stylesheet">
 </head>
 <body>

 <!-- Header de la page -->


 <header>
        <a href="../index.php">
        <img src="../images/logo.png" alt="SuperCar logo" class="logo">
        </a>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <li>
                    <a href="../php/supercar_voiture.php" >Nos voitures </a>
                </li>
                <li>
                    <a href="../php/supercar_essai.php">Demande d'Essai </a>
                </li>
                <li>
                    <a href="../php/supercar_evenement.php"> Évènements </a>
                </li>
                <li>
                    <a href="../php/supercar_contact.php"> Contactez-nous </a>
                </li>
                <li>
                <?php

                    session_start();


                    if(isset($_SESSION['nom_utilisateur'])) {
                        $nom_utilisateur = $_SESSION['nom_utilisateur'];
                        echo " <a href='../php/supercar_connexion.php' class='menu-icon'> $nom_utilisateur </a>";
                        } else {
                            echo "<a href='../php/supercar_connexion.php' class='active'> Connexion </a></a>";                        
                        }

                ?>                 
                </li>
            </ul>
        </nav>
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>

  <table align="center">
    <tr>
    <td>
      <form action="../php/traitement_formulaire.php" method="post">
      <div class="title">
        Contact
      </div>
      <p class="title1">
        Merci de remplir le formulaire ci-dessous pour nous contacter :
      </p>
      <input type="nom" id="nom" name="nom" placeholder="Nom" required>
      <input type="prenom" id="prenom" name="prenom" placeholder="Prenom" required>
      <input type="email" id="email" name="adresse_mail_contact" placeholder="Adresse mail" required>
      <input type="text" id="sujet" name="sujet" placeholder="Sujet" required>
      <p class="title1"> Message </p>
      <textarea id="message" name="message" required> </textarea>
      <button type="submit"> Envoyer </button>
    </td>
      </form>
    <td>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14380.792305084535!2d57.48219943400132!3d-20.236277169060426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c5adfd66d47b7%3A0x66c97e6459aed9d4!2sEb%C3%A8ne%20Junction!5e0!3m2!1sfr!2smu!4v1679566973539!5m2!1sfr!2smu" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </td>
    </tr>
</table>
 
 <!--Partie du footer-->
  
 <footer class="footer-distributed">
  
  <div class="footer-left">
    <a href="../index.html">
      <h3>SUPER<span>CAR</span></h3>
    </a>

      <p class="footer-links">
          <a href="../php/supercar_voiture.php"> Nos voitures </a>
          |
          <a href="../php/supercar_essai.html"> Essai </a>
          |
          <a href="../php/supercar_evenement.php"> Évènements </a>
          |
          <a href="../php/supercar_contact.html"> Contactez-nous </a>
      </p>

      <p class="footer-company-name">Copyright © 2023 <strong>SUPERCAR</strong> Tous droits réservés </p>
  </div>

  <div class="footer-center">
      <div>
          <i class="fa fa-map-marker"></i>
          <img src="../logos/localisation.png">
          <p><span>MCCI Business School,</span>
              Ebene, Mauritius</p>
      </div><br>

      <div>
          <i class="fa fa-phone"></i>
          <img src="../logos/whatsapp.png">
          <p>+230 1234 5678</p>
      </div><br>

      <div>
          <i class="fa fa-envelope"></i>
          <img src="../logos/logo_mail.png">
          <p><a href="mailto:supercar2023@gmail.com">supercar2023@gmail.com</a></p>
      </div>
  </div>
  <div class="footer-right">
      <p class="footer-company-about">
          <span>Notre Equipe</span>
          Ce projet <strong>SUPERCAR</strong> à été réalisé par Maeva Dorasamy,
          Jade Bissessur et Elisee L'aiguille. Classe de BTS SIO 2022-24
      </p>
  </div>
</footer>

</body>
</html>


 
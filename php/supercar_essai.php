<!DOCTYPE HTML>
<html lang="fr">
<head>
	  <title> Supercar - Demande d'Essai </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/essaie_style.css">
    <link rel="stylesheet" type="text/css" href="../style/header_css.css">
    <link rel="stylesheet" type="text/css" href="../style/footer_css.css">
</head>
<body>


<?php
session_start();
if (!isset($_SESSION['nom_utilisateur'])) {
    echo '<script>alert("Vous devez créer un compte ou vous connecter pour faire une demande d\'essai !")</script>';
    header("Refresh: 0; URL='supercar_connexion.php'");
    exit; 
}

if (!isset($_REQUEST['idvoiture'])) {
  echo '<script>alert("Vous devez choisir un modèle pour faire une demande d\'essai !")</script>';
  header("Refresh: 0; URL='supercar_voiture.php'");
  exit; 
}
  
?>

	<!-- Header de la page -->


  <header>
        <a href="../index.php">
        <img src="../images/logo.png" alt="SuperCar logo" class="logo">
        </a>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <li>
                    <a href="../php/supercar_voiture.php" >Nos voiture </a>
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


  <div class="container_essai">
    <div class="title"> Periode d'essai</div>
    <div class="content">

      <form id="demande_essai" method="post" action="../php/demande_essai.php">
        <div class="user-details">

        <div class="text-box">
            <p class="title1"> Marque et Modele </p>
        </div>

          <?php 
          include("bdconnect.php");
          $id = $_REQUEST['idvoiture'];
          $requete_car = "SELECT marque, modele FROM voitures WHERE idvoiture = $id";
          $result_car = mysqli_query($bdd, $requete_car);
          $car = mysqli_fetch_assoc($result_car);
      
          $requete_user = "SELECT nom_utilisateur, nom, prenom, adresse_mail_client, telephone 
                           FROM inscription WHERE nom_utilisateur = '$nom_utilisateur'";
          $result_user = mysqli_query($bdd, $requete_user);
          $user = mysqli_fetch_assoc($result_user);
          

          ?>

          <div class="input-box">
          <input  name="marque" class="input-field" value="<?php echo $car['marque']; ?>">
          <input  name="modele" class="input-field" value="<?php echo $car['modele']; ?>">
          </div>
           
          <div class="input-box">
            <input type="text" class="input-field" name="nom" value="<?php echo $user['nom']; ?>">
          </div>

          <div class="input-box">
            <input type="text" class="input-field" name="prenom" value="<?php echo $user['prenom']; ?>">
          </div>

          <div class="input-box">
            <input type="text" class="input-field" name="nom_utilisateur" value="<?php echo $user['nom_utilisateur']; ?>">
          </div>

          <div class="input-box">
            <input type="mail" class="input-field" name="adresse_mail_client" value="<?php echo $user['adresse_mail_client']; ?>">
          </div>

          <div class="input-box">
            <input type="text" class="input-field" name="adresse_physique_client" placeholder="Adresse physique" required>
          </div>

          <div class="input-box">
            <input type="text" class="input-field" id="telephone" name="telephone" value="<?php echo $user['telephone']; ?>">
          </div>

          <div class="text-box">
            <p class="title1"> Début de l'essai </p>
          </div>



          <div class="date-box">
            <input class="date-field" type="date" name="date_debut_essai" value="2023-04-10" required>
          </div>


          <div class="text-box">
              <p class="title1"> Fin de l'essai </p>
          </div>


          <div class="date-box">
            <input class="date-field" type="time" name="heure_debut_essai" value="10:00" required>
          </div>

          <div class="date-box">
            <input class="date-field" type="time" name="heure_fin_essai" value="15:00" required>
          </div>

          <button type="submit" class="button"> Enregistrer </button>
      </form>
    </div>
  </div>
</div>

 <!--Partie du footer-->
  
 <footer class="footer-distributed">
  
  <div class="footer-left">
    <a href="../index.php">
      <h3>SUPER<span>CAR</span></h3>
    </a>

      <p class="footer-links">
          <a href="../php/supercar_voiture.php"> Nos voitures </a>
          |
          <a href="../php/supercar_essai.php"> Essai </a>
          |
          <a href="../php/supercar_evenement.php"> Évènements </a>
          |
          <a href="../php/supercar_contact.php"> Contactez-nous </a>
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

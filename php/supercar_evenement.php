<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<head>
	<title> Supercar - Événement </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="..\style\evenement.css">
	<link rel="stylesheet" type="text/css" href="..\style\header_css.css">
	<link rel="stylesheet" type="text/css" href="..\style\footer_css.css">
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
	

<div class="info"> Les événements disponible </div>

<div class="titre"> Notre sélection d'événements </div>

<div class="titre_description"> Participez à notre événement et vivez des sensations de conduite incomparables. <br>
Voici nos dernières nouveautés.</div>
    
    
<?php

include("bdconnect.php");

$requete = "SELECT idevenement, image, titre, description_event FROM evenement";
$result = $bdd->query($requete);

echo '<div class="scrolling-wrapper">';
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='card'>";
            echo "<div> <img class='image-event' src='../" . $row['image'] . "' ></div>";
            echo "<div>";
            echo "<div class='card-block'>";
            echo "<h4 class='card-title'>" . $row['titre'] . "</h4>";
            echo "<p class='description'>" . $row['description_event'] . "</p>";
            echo "<a href='../php/evenement_infos.php?idevenement={$row['idevenement']}'>";
            echo "<button class='button'> En savoir plus </button>";
            echo "</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
    // Free result set
    $result->free();
} else {
    echo "Error: " . $bdd->error;
}


mysqli_close($bdd);

echo '</div>';

?>




  <!--Partie du footer-->
  
  <footer class="footer-distributed">
  
  <div class="footer-left">
    <a href="supercar_accueil.php">
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

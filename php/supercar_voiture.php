<!DOCTYPE HTML>
<html>
<head>
	<title> Supercar - Voiture </title>
	<link rel="stylesheet" type="text/css" href="../style/voiture_style.css">
    <link rel="stylesheet" type="text/css" href="../style/header_css.css">
    <link rel="stylesheet" type="text/css" href="../style/footer_css.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({ reset: true }); 
    </script>
</head>

<body>

<!-- Header de la page -->

<header>
        <a href="../index.php">
        <img src="../images/Supercar.png" alt="SuperCar logo" class="logo">
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


<script>

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>




<!-- Selection de voiture par marque -->
<div class="info"> Les meilleurs modèles </div>

<div class="titre"> Notre sélection de voitures </div>

<div class="titre_description"> Nous offrons à nos clients des sensations de conduite incroyables. <br>
C'est pourquoi nous n'avons que des voitures de classe mondiale. </div>



<section class="featured_section">
        <div>
            <ul class="margin_button">
                <li class="li-voiture">
                <a href="../php/supercar_voiture.php"> 
                    <button class="featured__item">
                        Tout
                    </button>
                </a>
                </li>
                <li class="li-voiture">
                <a href="../php/supercar_tesla.php">
                    <button class="featured__item">
                        <img class="marque_logo" src="../logos/tesla.png" alt="">
                    </button>
                </a>
                </li>
                <li class="li-voiture">
                <a href="../php/supercar_bmw.php">
                    <button class="featured__item">
                        <img class="marque_logo" src="../logos/bmw.png" alt="">
                    </button>
                </a>
                </li>
                <li class="li-voiture">
                <a href="../php/supercar_mercedes.php">
                    <button class="featured__item">
                        <img class="marque_logo" src="../logos/mercedes.png" alt="">
                    </button>
                    <li class="li-voiture">
                <a href="../php/supercar_porsche.php">
                    <button class="featured__item">
                        <img class="marque_logo" src="../logos/porsche.png" alt="">
                    </button>
                </a>
                </li>
                </a>
                </li>
            </ul>
        </div>
    </section>

<!-- Premiere ligne de la gallerie de voiture-->

<?php

include("bdconnect.php");

$requete = "SELECT idvoiture, marque, modele, image, description1 FROM voitures";
$result = $bdd->query($requete);

if ($result->num_rows > 0) {
    $count = 0;
    while($row = $result->fetch_assoc()) {
        // start a new gallery after every 4 elements
        if ($count % 4 == 0) {
            echo '<div class="gallery">';
        }
        echo '<div class="content">';
        echo '<h2 class="h2-voiture" name="marque">' . $row["marque"] . '</h2>';
        echo '<h3 class="featured__subtitle" name="modele">' . $row["modele"] . '</h3>';
        echo'<center>';
        echo '<img class="img-voiture" src="../' . $row["image"] .'">';
        echo'</center>';
        echo '<p class="p-voiture" name="description1">' . $row["description1"] . '</p>';
        echo "<a href='../php/voiture_infos.php?idvoiture={$row['idvoiture']}'>";        
        echo '<button class="bouton__plus">';
        echo ' Consulter </button>  </a>';
        echo '</div>';
        $count++;
        // end the current gallery after every 4 elements
        if ($count % 4 == 0) {
            echo '</div>';
        }
    }
    // if the last gallery only had 1-3 elements, close it here
    if ($count % 4 != 0) {
        echo '</div>';
    }
} else {
    echo "Pas de résultats";
}

mysqli_free_result($result);
 
mysqli_close($bdd);
?>


<?php

include("bdconnect.php");


$adresseIP = $_SERVER['REMOTE_ADDR'];

$sql = "INSERT INTO visites (adresse_ip) VALUES (?)";
$stmt = $bdd->prepare($sql);

$stmt->bind_param("s", $adresseIP);
$stmt->execute();

$sql = "SELECT COUNT(DISTINCT adresse_ip) as total FROM visites";
$result = $bdd->query($sql);
$resultat = $result->fetch_assoc();
$nombre_visites = $resultat['total'];


echo '<div class="visites">';
echo "Supercar a reçu la visite de " . $nombre_visites . " visiteurs sur cette page";
echo '</div>';
?>

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
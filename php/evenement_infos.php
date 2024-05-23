<!DOCTYPE HTML>
  <html lang="fr">
  <head>
    <link rel="stylesheet" type="text/css" href="../style/evenement_infos.css">
      <link rel="stylesheet" type="text/css" href="../style/header_css.css">
      <link rel="stylesheet" type="text/css" href="../style/footer_css.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800&display=swap" rel="stylesheet">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <title> Informations </title>
  
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

 <?php 
    include("bdconnect.php");

    $id = $_GET['idevenement'];
    $requete = "SELECT titre, soustitre, image, description_info FROM evenement WHERE idevenement = $id";
    $result = mysqli_query($bdd, $requete);
    $event = mysqli_fetch_assoc($result);
  
    echo '<div class="container">';
    echo '<div class="detail">';
    echo '<div class="image">';
    echo '<img src="../' . $event['image'] . '">';
    echo '</div>';
    echo '<div class="content">';
    echo '<h1 class="titre">' . $event['titre'] . '</h1>';
    echo '<h2 class="h2">';
    echo '<span class="span-h2" name="soustitre">' . $event['soustitre'] . '</span>';
    echo '</h2>';
    echo '<div class="description">' . $event['description_info'] . '</div>';
    echo '<button class="button">';
    echo "<a href='../php/supercar_evenement.php' >";
    echo 'Retour a la page precedente ';
    echo '</a>';
    echo '</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
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
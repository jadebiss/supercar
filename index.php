<DOCTYPE html>

    <html>
        <head>
        <title>SUPERCAR</title>
        <link rel="icon" href="images/logo.ico" type="image/x-icon">
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style/page_d'accueil_css.css">
        <link rel="stylesheet" type="text/css" href="style/header_css.css">
        <link rel="stylesheet" type="text/css" href="style/footer_css.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800&display=swap" rel="stylesheet">
        </head>
  <body>
  
	<!-- Header de la page -->



    <header>
        <a href="../index.php">
        <img src="images/logo.png" alt="SuperCar logo" class="logo">
        </a>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <li>
                    <a href="php/supercar_voiture.php" >Nos voiture </a>
                </li>
                <li>
                    <a href="php/supercar_essai.php">Demande d'Essai </a>
                </li>
                <li>
                    <a href="php/supercar_evenement.php"> Évènements </a>
                </li>
                <li>
                    <a href="php/supercar_contact.php"> Contactez-nous </a>
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



<!-- Accueil -->

<div class="row">
    <div class="col">
        <h1>Besoin d'une voiture? Nous avons ce qu'il vous faut.</h1>
        <p class="description"> Nous vous proposons une sélection unique de voitures classiques pour vous offrir une expérience de conduite parfaite. </p>
        <a href="php/supercar_voiture.php">
        <button type="button"> Découvrir </button>
        </a>
    </div>
    <div class="col">
        <a href="php/supercar_bmw.php">

        <div class="card">
            <img src="images/card1.png" class="image-card">
            <h5> BMW </h5>
            <p class="description" > Découvrez notre sélection de voiture de la marque BMW </p>
        </div>
        </a>

        <a href="php/supercar_tesla.php">
        <div class="card">
            <img src="images/card2.png" class="image-card">
            <h5> Tesla </h5>
            <p class="description"> Découvrez notre sélection de voiture de la marque Tesla </p>
        </div>
        </a>

        <a href="php/supercar_mercedes.php">
        <div class="card">
            <img src="images/card3.png" class="image-card">
            <h5> Mercedes </h5>
            <p class="description"> Découvrez notre sélection de voiture de la marque Mercedes </p>
        </div>
        </a>
        <a href="php/supercar_porsche.php">
        <div class="card">
            <img src="images/card4.png" class="image-card">
            <h5> Porsche </h5>
            <p class="description"> Sélection de voiture de la marque Porsche bientôt disponible </p>
        </div>
        </a>
    </div>
</div>
  
  <!--Partie du Carousel-->
  
  <div class="slideshow-container">
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/carousel_1.png" style="width:100%">
    </div>
    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/carousel_2.png" style="width:100%">
    </div>
    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/carousel_3.png" style="width:100%">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script src="script.js"></script>
  
  <!--Partie du footer-->
  
          <footer class="footer-distributed">
  
              <div class="footer-left">
                <a href="supercar_accueil.html">
                  <h3>SUPER<span>CAR</span></h3>
                </a>
      
                  <p class="footer-links">
                      <a href="php/supercar_voiture.php"> Nos voitures </a>
                      |
                      <a href="php/supercar_essai.html"> Essai </a>
                      |
                      <a href="php/supercar_evenement.php"> Évènements </a>
                      |
                      <a href="php/supercar_contact.html"> Contactez-nous </a>
                  </p>
      
                  <p class="footer-company-name">Copyright © 2023 <strong>SUPERCAR</strong> Tous droits réservés </p>
              </div>
      
              <div class="footer-center">
                  <div>
                      <i class="fa fa-map-marker"></i>
                      <img src="logos/localisation.png">
                      <p><span>MCCI Business School,</span>
                          Ebene, Mauritius</p>
                  </div><br>
      
                  <div>
                      <i class="fa fa-phone"></i>
                      <img src="logos/whatsapp.png">
                      <p>+230 1234 5678</p>
                  </div><br>
  
                  <div>
                      <i class="fa fa-envelope"></i>
                      <img src="logos/logo_mail.png">
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
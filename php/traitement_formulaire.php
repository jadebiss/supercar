<?php

    // Récupération des données du formulaire

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $adresse_mail_contact=$_POST['adresse_mail_contact'];
    $sujet=$_POST['sujet'];
    $message=$_POST['message'];

    include("bdconnect.php");
    // Préparation de la requête SQL pour l'insertion des données du formulaire
    $sql = "INSERT INTO contact (nom, prenom, adresse_mail_contact, sujet, message)
            VALUES ('$nom', '$prenom', '$adresse_mail_contact', '$sujet', '$message')";
    
    // Exécution de la requête SQL
    if (mysqli_query($bdd, $sql)) {
        echo "<script>alert('Votre message a été enregistrée');</script>";
        header("Refresh: 0; URL='supercar_contact.php'");
    } else {
        echo "<script>alert('Une erreur s'est produite, veuillez réessayer');</script>";
        header("Refresh: 0; URL='supercar_contact.php'");
    }
    
    // Fermeture de la connexion à la base de données
    mysqli_close($bdd);
    ?>
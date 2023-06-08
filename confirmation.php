<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération des données du formulaire
        $nom = $_POST['votre_nom'];
        $email = $_POST['votre_courielle'];
        $message = $_POST['message'];

        // Destinataire de l'e-mail
        $destinataire = 'bellahcenekhaoula1@gmail.com';

        // Sujet de l'e-mail
        $sujet = 'Nouveau message de cv';

        // Corps de l'e-mail
        $corps = "Nom: $nom\n\n";
        $corps .= "Adresse e-mail: $email\n\n";
        $corps .= "Message:\n$message";

        // Envoi de l'e-mail
        mail($destinataire, $sujet, $corps);

        // Redirection vers une page de confirmation
        header('Location:index.php');
        exit();
    }
?>
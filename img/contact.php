<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $destinataire = "evelinbri@gmail.com";
    $sujet = "Nouveau message depuis le formulaire";
    
    $contenu = "Nom: $nom\n";
    $contenu .= "Email: $email\n";
    $contenu .= "Message:\n$message\n";
    
    $entetes = "De: $email\r\n";
    
    // Utilisation de la fonction mail() pour envoyer le message
    if (mail($destinataire, $sujet, $contenu, $entetes)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>
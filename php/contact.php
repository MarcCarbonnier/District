<?php

$email= $_POST['email']; //Récupère l'adresse E'mail
// Vérifier si l'email correspond à un format d'email valide
if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
    echo "Email valide.";
} else {
    echo "Email invalide.";
}

$telephone = $_POST['tel']; // Récupérer le numéro de téléphone du formulaire
// Vérifier si le numéro de téléphone est valide
if (preg_match('/^0[1-9](\.\d{2}){4}$/', $telephone)) {
    echo "Numéro de téléphone valide.";
} else {
    echo "Numéro de téléphone invalide.";
}

$name= $_POST['nom'];
//Vérifie si le nom et prénom sont valides
if (preg_match('/^[a-zA-Z\s]+$/', $name)){
    echo "Nom et prénom valide.";
}
else{
    echo "Nom et prénom invalide.";
}

/* //Envoi sur la page html associé
if ( isset( $_POST['sub'])) { 
    header('Location: ') ; //Renvoi vers la page HTML
}
*/


?>
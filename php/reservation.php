<link rel="stylesheet" href="../CSS/reservation.css">

<?php
include 'header.php';
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    
    $name = htmlspecialchars($_POST['nom']);
    $couvert = (int)$_POST['guests'];
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['appt-time']);


    if(empty($name) || $couvert <= 0 || empty($date) || empty($time)){}
        else {
            echo "<h2 class='nom'>Merci de votre réservation, $name ! </h2>";
            echo "<p>Détails de votre réservation :</p>";
            echo "<ul>";
            echo "<li>Nom : $name</li>";
            echo "<li>Date : $date</li>";
            echo "<li>Heure : $time</li>";
            echo "<li>Nombre de personnes : $couvert</li>";
            echo "</ul>";
        }
}

else {
    header('Location: ./reservation.php');
}

?>
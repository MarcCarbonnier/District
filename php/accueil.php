<?php 
$title = "Accueil";
include 'header.php';
?>
<head>
    <link rel="stylesheet" href="../CSS/accueil.css">
</head>

<div class="bg">
    <div id="form" class="form-control">
        <form class="d-flex" id="formulaire" role="search" method="post">
            <input class="form-control me-2" id="search" name="search" type="search" placeholder="Recherche..."
                aria-label="Recherche" />
        </form>
    </div>
</div>
<div class="corps">
    <div class="paragraph">
        <div class="titre">
            <h4>Bienvenue chez le District</h4>
        </div>
        <div class="text">
            <p class="texte">
                Située au : 30 Rue Poulainville, Amiens, 80000 Ouvert du Lundi au
                samedi 11h30- 13h30 19h30-22h
            </p>
        </div>
    </div>
    <div class="anim1"></div>
    <div class="anim2"></div>
</div>

<?php 
include 'footer.php'
?>
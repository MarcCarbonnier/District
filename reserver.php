<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>District</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="CSS/reserver.css" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="first">


        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Menu
          </button>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="accueil.html">Accueil</a></li>
            <li><a class="dropdown-item" href="categorie.html">Catégorie</a></li>
            <li><a class="dropdown-item" href="plats.html">Plats</a></li>
            <li><a class="dropdown-item" href="reserver.html">Réserver</a></li>
            <li><a class="dropdown-item" href="contact.html">Contact</a></li>
          </ul>
        </div>


        <div class="collapse navbar-collapse">
          <ul class="navbar-nav fs-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="accueil.html">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="categorie.html">Catégorie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="plats.html">Plats</a>
            </li>
          </ul>
        </div>
        <img id="logo" src="images_the_district/the_district_brand/logo_transparent.png" alt="logo_transparent" />
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav fs-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="reserver.html">Réserver</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <div id="reseaux1">
                <div class="twitter">
                  <img src="/images_the_district/the_district_brand/twitter_header_photo_1.png" alt="twitt"
                    id="twitte" />
                </div>
                <div class="YT">
                  <img src="images_the_district/the_district_brand/youtube_profile_image.png" alt="youtube"
                    id="youtube" />
                </div>
                <div class="insta">
                  <img src="/images_the_district/the_district_brand/instagram_profile_image.png" alt="instagram"
                    id="instagram" />
                </div>
              </div>
              <div id="reseaux2">
                <div class="linkedin">
                  <img src="/images_the_district/the_district_brand/linkedin_banner_image_1.png" alt="linkedin"
                    id="in" />
                </div>
                <div class="fb">
                  <img src="/images_the_district/the_district_brand/facebook_profile_image.png" alt="facebook"
                    id="facebook" />
                </div>
                <div class="pt">
                  <img src="/images_the_district/the_district_brand/pinterest_profile_image.png" alt="pnterest"
                    id="pinterest" />
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="box">
    <h1>Réservation</h1>
    <form class="nom formulaire" id="formulaire" method="POST" action="./php/reservation.php">
      <input type="text" name="nom" class="nom" id="nom" placeholder="Nom de la Réservation" required>
      <div class="couverts pad">
        <label for="guests">Nombre de couverts :</label>
        <input type="number" id="guests" name="guests" class="menu" min="1" max="20" required>
      </div>
      <div class="date pad">
        <input type="date" id="date" name="date" required />
      </div>
      <div class="horaire pad">
        <div class="nativeTimePicker">
          <input id="appt-time" type="time" name="appt-time" min="11:00" max="13h30" required />
          <span class="validity"></span>
        </div>
        <div class="fallbackTimePicker">
        </div>
      </div>
      <div class="reserve pad">
        <input type="submit" class="reserveenvoi" value="Réserver" />
      </div>
    </form>
  </div>
  <footer>
    <div id="reseaux1mobile">
      <div class="twitter">
        <img src="/images_the_district/the_district_brand/twitter_header_photo_1.png" alt="twitt" id="twitte" />
      </div>
      <div class="YT">
        <img src="images_the_district/the_district_brand/youtube_profile_image.png" alt="youtube" id="youtube" />
      </div>
      <div class="insta">
        <img src="/images_the_district/the_district_brand/instagram_profile_image.png" alt="instagram" id="instagram" />
      </div>
    </div>
    <div id="reseaux2mobile">
      <div class="linkedin">
        <img src="/images_the_district/the_district_brand/linkedin_banner_image_1.png" alt="linkedin" id="in" />
      </div>
      <div class="fb">
        <img src="/images_the_district/the_district_brand/facebook_profile_image.png" alt="facebook" id="facebook" />
      </div>
      <div class="pt">
        <img src="/images_the_district/the_district_brand/pinterest_profile_image.png" alt="pnterest" id="pinterest" />
      </div>
    </div>
  </footer>

  <script src="./JS/reservation.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
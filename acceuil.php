<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ma ville</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            /* Réglage de l'image de fond */
            background-image: url('https://static.vecteezy.com/system/resources/previews/007/385/336/original/sky-scrapper-background-design-free-vector.jpg');
            /* Définir l'image comme de taille de couverture pour couvrir tout le corps */
            background-size: cover;
            /* Centrer l'image horizontalement et verticalement */
            background-position: center;
            /* Fixer l'image de fond pour qu'elle ne se déplace pas lors du défilement */
            background-attachment: fixed;
        }
        /* Ajoutez d'autres styles CSS au besoin */
        nav { 
            
            box-shadow: rgba(0, 0, 0, 0.4) 10px 10px 10px 0;
            background-color: rgb(255, 240, 200); /* Définit la couleur de fond du corps de la page */
            border-radius: 30px; 
        }
        
        h1 {
    font-family: Apple Chancery, cursive;
    font-size: 3rem;
    color: #333;
    font-weight: bold;
        }

        footer {


            box-shadow: rgba(0, 0, 0, 0.4) 10px 10px 10px 0;
            background-color: rgb(255, 240, 200); /* Définit la couleur de fond du corps de la page */
            border-radius: 30px; 
        }
        divs {
            background-color: rgb(255, 240, 200);
            box-shadow: rgba(0, 0, 0, 0.4) 20px 20px 20px 0;
            border-radius: 30px;
            font-family: Apple Chancery, cursive;
        }
    </style>

<head>
    <!-- Autres balises d'en-tête -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>

</head>
<body>

    
<div class="container-fluid">



<nav class="navbar navbar-expand-lg navbar-light mt-3 ">
<div class="container">
    <h1 class="text-center my-5">JOINVILLE LE PONT</h1>
</div>
<select id="navigationDropdown" onchange="navigate()">
    <option value="" disabled selected>other
</option>
    <option value="page4.php">commerce</option>
    <option value="page5.php">leisure</option>
    <option value="page6.php">services</option>
</select>

<script>
function navigate() {
    var selectedPage = document.getElementById("navigationDropdown").value;
    if (selectedPage) {
        window.location = selectedPage;
    }
}
</script>
    </nav>



	<div class="row">
		<div class="col-md-2">

		</div>
		<divs class="col-md-8 mt-5 ">
        <div id="carouselExampleCaptions" class="carousel slide">
           <H2> <?php echo' 
JOINVILLE LE PONT GRAPHICS CARD
 
 '?></H2>
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://94.citoyens.com/wp-content/blogs.dir/2/files/2020/04/marche-primeur-legumes-stocklib-kasto-768x350.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.ville-saint-maurice.com/fileadmin/_processed_/1/7/csm_sieges_theatre_bandeau_626fd6bc0d.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.leparisien.fr/resizer/UshmJvGJ6qGLVHZCopb6ptBTA4c=/932x582/arc-anglerfish-eu-central-1-prod-leparisien.s3.amazonaws.com/public/UWIY3WVF7JPM67Y7VTUMNRB5NI.jpg" class="d-block w-100" alt="...">
      <div claslabels="carousel-caption d-none d-md-block">
        <h5> </h5>
        <p></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

  <div class="mt-5" id="map" style="height: 400px;"></div>
  
  <p class="mt-5">
   
Joinville-le-Pont is a charming French commune nestled in the Val-de-Marne department, in the heart of the Île-de-France region. Its history dates back to the revolutionary era, with its creation in 1790 as a result of the dismemberment of the former parish of Saint-Maur, now known as Saint-Maur-des-Fossés. In its early days, the commune was known as La Branche-du-Pont-de-Saint-Maur, but in 1831 it was renamed Joinville-le-Pont.
Since then, Joinville-le-Pont has flourished as a peaceful, dynamic place to live, where history and modernity blend harmoniously. Its picturesque streets and banks of the Marne provide a pleasant living environment for its residents. The town has preserved its heritage while developing its infrastructure to meet the needs of its growing population.
Today, Joinville-le-Pont is a popular destination for its green spaces, cultural facilities, local shops and incomparable quality of life. It embodies the authentic charm of the Île-de-France region, while offering its residents a dynamic and friendly living environment.
 
   
    </p>
    <?php
// Code PHP ici si nécessaire
?>

<!-- Insérer le code d'intégration de la vidéo YouTube -->
<div class='mt-5 mb-4'>
<iframe width="950" height="500" src="https://www.youtube.com/embed/Ha8IZ_Gh0Yo?si=H3ikSe30xZIY-d_w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

<?php
// Autre code PHP ici si nécessaire
?>
    </divs>
		</div>
		<div class="col-md-2">
		</div>
	</div>

    <script>
    var map = L.map('map').setView([48.816337, 2.459248], 40);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    </script>



    



    <footer class="footer mt-5 py-3 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Contact</h5>
                <p>Email: yaomarcaurel373@gmail.com.com</p>
                <p>phone: +0658758508</p>
                <p>Adress: 22 Rue , PARIS, saint-maurice</p>
            </div>
            <div class="col-md-6">
                <h5> 
Useful links
 
 
</h5>
                <ul class="list-unstyled">
                    <li><a href="#"> 
About us
 
 </a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#"> 
Privacy policy
 
 </a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
</body>
</html>
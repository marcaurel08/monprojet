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

        p {
            background-color: rgb(255, 240, 200);
            box-shadow: rgba(0, 0, 0, 0.4) 20px 20px 20px 0;
            border-radius: 30px;
            font-family: Apple Chancery, cursive;
        }

        img{
            box-shadow: rgba(0, 0, 0, 0.4) 20px 20px 20px 0;
            border-radius: 30px;
        }
        
    </style>



</head>
<body>

    
<div class="container-fluid">



<nav class="navbar navbar-expand-lg navbar-light mt-3 ">
<div class="container">
    <h1 class="text-center my-5">services</h1>
</div>
<select id="navigationDropdown" onchange="navigate()">
    <option value="" disabled selected>other</option>
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



    <div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<divs class="col-md-8 mx-5 my-5">
            <div>Welcome to Joinville, a hidden gem in the French landscape that welcomes you with open arms and invites you to discover all it has to offer. Nestled in the heart of the Grand Est region, this dynamic and welcoming town is full of treasures to explore.

As soon as you cross its borders, you're enveloped by a warm and friendly atmosphere. The people of Joinville are renowned for their legendary hospitality, ready to share their love of their town with you and guide you through its picturesque streets.

Whether you're a lover of history, culture, nature or gastronomy, Joinville has something to seduce you. Wander its cobbled streets and discover beautifully preserved historic buildings, witnesses to a rich past. Explore the many verdant parks and gardens, offering peaceful places to relax and escape from everyday life.

Lively festivals and events regularly enliven the city, creating a vibrant and festive atmosphere. Whether it's attending an open-air concert, sampling local culinary specialties at an artisan market or taking part in a traditional celebration, there's always something to see and do in Joinville.

Let yourself be seduced by the warm welcome of its inhabitants, the richness of its heritage and the beauty of its natural surroundings. Joinville awaits you with open arms, ready to offer you an unforgettable experience. So what are you waiting for?

Translated with DeepL.com (free version)</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>





    <footer class="footer mt-5 py-3 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Contact</h5>
                <div>Email: yaomarcaurel373@gmail.com.com</div>
                <div> Téléphone: +0658758508</div>
                <div>Adresse: 22 Rue , PARIS, saint-maurice</div>
            </div>
            <div class="col-md-6">
                <h5>Liens utiles</h5>
                <ul class="list-unstyled">
                    <li><a href="#">À propos</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
</body>
</html>
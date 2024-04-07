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
            background-image: url('https://png.pngtree.com/back_origin_pic/04/56/89/127a2f8308ca9b4621fbcb63a7e20fc5.jpg');
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
    <option value="" disabled selected>AUTRES</option>
    <option value="page1.php">commerce</option>
    <option value="page2.php">loisirs</option>
    <option value="page3.php">services</option>
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
            <div>Bienvenue à Joinville, un joyau caché dans le paysage français qui vous accueille à bras ouverts et vous invite à découvrir tout ce qu'elle a à offrir. Nichée au cœur de la région du Grand Est, cette ville dynamique et accueillante regorge de trésors à explorer.

Dès que vous franchissez ses frontières, vous êtes enveloppé par une atmosphère chaleureuse et conviviale. Les habitants de Joinville sont réputés pour leur hospitalité légendaire, prêts à partager avec vous leur amour pour leur ville et à vous guider à travers ses rues pittoresques.

Que vous soyez amateur d'histoire, de culture, de nature ou de gastronomie, Joinville a quelque chose pour vous séduire. Parcourez ses ruelles pavées et découvrez des bâtiments historiques magnifiquement préservés, témoins d'un riche passé. Explorez les nombreux parcs et jardins verdoyants qui offrent des espaces de détente paisibles pour s'évader du quotidien.

Les festivals et événements animés animent régulièrement la ville, créant une ambiance vibrante et festive. Que ce soit pour assister à un concert en plein air, déguster des spécialités culinaires locales lors d'un marché artisanal ou participer à une célébration traditionnelle, il y a toujours quelque chose à voir et à faire à Joinville.

Laissez-vous séduire par l'accueil chaleureux de ses habitants, par la richesse de son patrimoine et par la beauté de son cadre naturel. Joinville vous attend à bras ouverts, prête à vous offrir une expérience inoubliable. Alors, qu'attendez-vous ? Venez découvrir tout ce que cette ville accueillante a à vous offrir !?</div>
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
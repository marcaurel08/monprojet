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
            text-align: center;
        }
        
    </style>



</head>
<body>

    
<div class="container-fluid">




<nav class="navbar navbar-expand-lg navbar-light mt-3 ">
<div class="container">
    <h1 class="text-center my-5">Commerce</h1>
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




    <div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4 mx-4 my-4">
           <h1> <p class=""text-center>les commerces de ma ville</p></h1>
		</div>
		<div class="col-md-4">
		</div>
	</div>












	<div class="row my-4 mx-4">
		<div class="col-md-4">
            <p class="mt-5">
            Chez Monoprix, nous comprenons l'importance de la commodité et de la qualité. C'est pourquoi nous nous efforçons de fournir à nos clients une gamme variée de produits de haute qualité à des prix compétitifs, le tout dans un environnement accueillant et convivial.

Que vous soyez à la recherche de vos articles essentiels du quotidien ou que vous souhaitiez découvrir de nouveaux produits, Monoprix est là pour vous servir. Notre équipe dévouée est toujours prête à vous aider et à vous guider tout au long de votre expérience de shopping.

Rejoignez-nous chez Monoprix, où chaque visite est une expérience unique et agréable. Nous avons hâte de vous accueillir et de vous offrir le meilleur service et les meilleurs produits, car chez Monoprix, votre satisfaction est notre priorité absolue.
            </p>
		</div>
		<divs class="col-md-8">
        <img src="https://www.lineaires.com/var/site/storage/images/_aliases/reference/4/4/7/0/3180744-1-fre-FR/1aDSC_4622.jpg" alt="Description de l'image" style="border: 5px solid black;" width="860" height="500" class="my-4 mx-4">
		</div>
	</div>
	<div class="row mx-5 my-5">
    <div class="col-md-4">
                    <p class="mt-4">Nous sommes fiers de vous accueillir dans votre magasin Lidl local, où nous sommes dévoués à vous offrir une expérience de shopping exceptionnelle. En tant que membre de votre communauté, nous comprenons vos besoins uniques et nous nous engageons à vous fournir des produits de qualité à des prix avantageux, chaque jour.

Chez Lidl, nous croyons en la proximité et en la confiance. C'est pourquoi nous travaillons dur pour vous offrir une sélection variée de produits, des aliments frais aux articles ménagers essentiels, en passant par les offres spéciales de la semaine. Nous voulons que vous puissiez trouver tout ce dont vous avez besoin, facilement et à un prix abordable.

Mais chez Lidl, ce n'est pas seulement une question de produits. C'est aussi une question de service. Notre équipe dévouée est là pour vous accueillir avec le sourire, répondre à vos questions et vous aider à trouver ce que vous cherchez. Nous sommes là pour rendre votre expérience de magasinage agréable et sans tracas, à chaque visite.
                    </p>
    
                </div>
		<divs class="col-md-8">
        <img src="https://logistikadnes.sk/wp-content/uploads/2020/04/lidl.jpg" alt="Description de l'image" style="border: 5px solid black;" width="860" height="500" class="my-4 mx-4">
		</div>
            
    </div>
	<div class="row mx-5 my-5">
		<div class="col-md-4 mt-5 ">
        <p class="mt-5">
            Découvrez le marché en plein air de Joinville, un véritable paradis pour les amoureux de produits bio et locaux !

Chaque semaine, notre marché s'anime avec une abondance de produits frais, cultivés avec soin par nos producteurs locaux. Nous sommes fiers de vous offrir une sélection exclusive de fruits et légumes biologiques, récoltés à maturité pour une saveur incomparable. Nos stands regorgent également de délices artisanaux, des produits du terroir qui mettent en valeur le savoir-faire traditionnel de notre région.

Chez nous, la qualité prime. Nous travaillons en étroite collaboration avec nos producteurs pour garantir des pratiques agricoles durables et respectueuses de l'environnement. Chaque produit que vous trouverez sur nos étals est cultivé avec passion, sans pesticides ni produits chimiques nocifs, pour une alimentation saine et équilibrée.

En plus de nos délicieux produits bio, notre marché offre une atmosphère chaleureuse et conviviale où vous pourrez flâner en toute tranquillité, discuter avec nos producteurs passionnés et découvrir de nouvelles saveurs. Que vous soyez à la recherche de produits frais pour vos repas quotidiens ou de délices uniques pour égayer vos papilles, vous trouverez tout ce dont vous avez besoin au marché de Joinville.

            </p>
		</div>
		<divs class="col-md-8 mt-5">
        <img src="https://www.leparisien.fr/resizer/4AqGfgt2nfvREB9Kp1Rb3RBOCH0=/932x582/cloudfront-eu-central-1.images.arcpublishing.com/leparisien/UXTQEDWM5S4YZYF6SJ5T3DXFHI.jpg" style="border: 5px solid black;" width="870" height="550" class="my-4 mx-4" alt="...">
    
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
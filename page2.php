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
    <h1 class="text-center my-5">les endroits à visiter</h1>
</div>
<select id="navigationDropdown" onchange="navigate()">
    <option value="" disabled selected>AUTRES</option>
    <option value="page1.php">commerce</option>
    <option value="page2.php">loisirs</option>
    <option value="page3.php">service</option>
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
           <h1> <p class=""text-center>les activités à faire</p></h1>
		</div>
		<div class="col-md-4">
		</div>
	</div>











    <div class="row row-cols-1 row-cols-md-3 g-4 my-5 mx-5">
  <div class="col">
    <div class="card h-100 mx-5">
      <img src="https://www.sulinfoco.com.br/wp-content/uploads/2020/10/1-60-768x380.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">théâtre</h5>
        <p class="card-text">c'est un endroit sympa de la ville ou vous pourriez voir des spectacle je vous conseille vivement de vous y rendre.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 mx-5 ">
      <img src="https://upload.wikimedia.org/wikipedia/commons/c/c6/Tour_eiffel_paris-eiffel_tower.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">tour effeil</h5>
        <p class="card-text">c'est un monument incontournable de la ville de paris mais vous pouvez vous y rendre tres facilement avec les moyens de transport dont le RER</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 mx-5 ">
      <img src="https://cinejunior.fr/wp-content/uploads/sites/2/2020/10/Mairie-Joinville-le-pont.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">la mairie de joinville</h5>
        <p class="card-text">je vous conseille d'aller jeter un coup d'oeil car l'acceuil est vraiment chaleureux</p>
      </div>
    </div>
  </div>
</div>








<div class="row row-cols-1 row-cols-md-3 g-4 my-5 mx-5">
  <div class="col">
    <div class="card h-100 mx-5">
      <img src="https://www.leparisien.fr/resizer/UshmJvGJ6qGLVHZCopb6ptBTA4c=/932x582/arc-anglerfish-eu-central-1-prod-leparisien.s3.amazonaws.com/public/UWIY3WVF7JPM67Y7VTUMNRB5NI.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">le stade de joinville</h5>
        <p class="card-text">c'est labas qu'a lieu toute les rencontres sportives de la ville de joinville pour ceux qui adore le foot je vous invite à aller jeter un coup d'oeil</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 mx-5 ">
      <img src="https://catholiques-val-de-marne.cef.fr/wp-content/uploads/sites/43/2019/05/Joinville-le-pont_eglise_st_charles-1024x768.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">l'eglise de joinville</h5>
        <p class="card-text">pour les pratiquant de la réligion Catholique vous pouvez effectuer tout les dimanches vos messes</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 mx-5 ">
      <img src="https://www.tripsavvy.com/thmb/ZxsOm5tXS74sQwQO_aEMMycISI8=/2121x1414/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-486010625-ff5804c480a9452b9e826e03c12e1b79.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">le bois de vincennes</h5>
        <p class="card-text">pour les sportifs, les aventuriers et pour les personnes qui adorent la nature le bois de vincennes est un endroits à visiter</p>
      </div>
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
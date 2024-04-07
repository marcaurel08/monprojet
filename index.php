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
            background-image: url('https://th.bing.com/th/id/R.65e68cea10675491d82a17f4324d191e?rik=umwwo3wHDfO4EQ&riu=http%3a%2f%2fcoloriage.info%2fimages%2fccovers%2f1522780187ville-paysage-urbain.jpg&ehk=Q4Q9zARB4Jmp2zw5Q5DVqQ0Evr13cktBXts7V2WbWR8%3d&risl=&pid=ImgRaw&r=0');
            /* Définir l'image comme de taille de couverture pour couvrir tout le corps */
            background-size: cover;
            /* Centrer l'image horizontalement et verticalement */
            background-position: center;
            /* Fixer l'image de fond pour qu'elle ne se déplace pas lors du défilement */
            background-attachment: fixed;
        }
        /* Ajoutez d'autres styles CSS au besoin */
        
    </style>
</head>
<body class='text-center' >

    <div class="container-fluid">
    <form method="post">    
        <!-- alert haut de page d'acceuil -->
        <div class="alert alert-primary" role="alert">
            <h1><?php echo'BIENVENUE                                     / WELCOME'?></h1>
        </div>

        
        <!-- encoche francais anglais -->
        <div class="row">
		<div class="col-md-6 mt-5 d-flex justify-content-center align-items-center">
                        <div class="card" style="width: 15rem; text-center">
                            <img src="https://th.bing.com/th/id/R.925ec686f656d7fce41051a0c2947d88?rik=XFwadF0n7VCgfA&riu=http%3a%2f%2fwww.pixelstalk.net%2fwp-content%2fuploads%2f2016%2f07%2fFrench-Flag-HD-Image.png&ehk=z%2bbdEnHN4QAzLNlS06zhrRG0f5oKbwBA9NA%2bE%2bYJFxU%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">FRANCAIS</h5>
                                <p class="card-text">vous pouvez choisir de continuer la visite du site en francais</p>
                                <button type="submit" name="bouton1" class="btn btn-primary">FRENCH</button>
                            </div>
                        </div>
        </div>
		<div class="col-md-6 mt-5 d-flex justify-content-center align-items-center ">

                        <div class="card" style="width: 15rem;">
                            <img src="https://th.bing.com/th/id/OIP.U-h9wYdOSH047roWjY_1TgAAAA?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">ENGLISH</h5>
                                <p class="card-text">you can choose to continue visiting the site in English</p>
                                <button type="submit" name="bouton2" class="btn btn-primary">ENGLISH</button>
                            </div>
                        </div>
		</div>
    </form>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


<?php
if(isset($_POST['bouton1'])) {
    header("Location: destination.php");
    exit;
} elseif(isset($_POST['bouton2'])) {
    header("Location: destination12.php");
    exit;
}
?>





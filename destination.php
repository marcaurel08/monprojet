<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </style>
</head>
<body class='text-center'>
    <div class="container-fluid">
        <div class="alert alert-warning" role="alert">
            <h1><?php echo'INCRIVEZ-VOUS'?></h1>
        </div>


    <!-- formulaire -->
    <form action="dest.php" method="post">
        

        <div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
                    <label for="exampleInputEmail1" class="form-label"><h3>PRENOM </h3></label>
                    <div class="input-group mb-3 mt-2">
                        <input type="text" class="form-control" placeholder="prenom" aria-label="prenom" aria-describedby="basic-addon1" name="prenom" required >
                        
                    </div>

                    <div>
                        <label for="exampleInputEmail1" class="form-label"> <h3>NOM</h3></label>
                        <input type="text" class="form-control" placeholder="nom" aria-label="nom" aria-describedby="basic-addon1" name="nom" required>
                        
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><h3>ADDRESSE-MAIL </h3></label>
                        <input type="email" class="form-control"  placeholder="mail" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" required>
                    </div>
                    <div class="col">
                    <label for="exampleInputEmail1" class="form-label">  <h3>AUTRES</h3></label>
                    <select class="form-select" name="autres" required>
                    <option selected>options</option>
                    <option value="1">demande d'informations</option>
                    <option value="2">demande de rendez-vous</option>
                    <option value="3">divers</option>
                    </select>
                    <div class="mb-3 mt-5">
                    <button type="submit" class="btn btn-outline-danger"><h3>envoyer</h3></button>
                    </div>
        </div>
		</div>
		<div class="col-md-4">
		</div>
	</div>

    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</body>
</html>
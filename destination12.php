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
    </style>
</head>
<body class='text-center'>
    <div class="container-fluid">
        <div class="alert alert-success" role="alert">
            <h1><?php echo'SIGN UP'?></h1>
        </div>
        <!-- formulaire -->
    <form action="dest1.php" method='post'>
        

        <div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
                    <label for="exampleInputEmail1" class="form-label"><h3>FIRST NAME </h3></label>
                    <div class="input-group mb-3 mt-2">
                        <input type="text" class="form-control" placeholder="first name" aria-label="first name" aria-describedby="basic-addon1" name="first name" required>
                        
                    </div>

                    <div>
                        <label for="exampleInputEmail1" class="form-label"> <h3>NAME</h3></label>
                        <input type="text" class="form-control" placeholder="name" aria-label="name" aria-describedby="basic-addon1" name="name" required>
                        
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><h3>EMAIL ADDRESS </h3></label>
                        <input type="email" class="form-control"  placeholder="mail" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" required>
                    </div>
                    <div class="col">
                    <label for="exampleInputEmail1" class="form-label">  <h3>OTHER</h3></label>
                    <select class="form-select" name="viile" required>
                    <option selected>options</option>
                    <option value="1">Message the school</option>
                    <option value="2">Request an appointment</option>
                    <option value="3">diverse</option>
                    </select>
                    <div class="mb-3 mt-5">
                    <button type="submit" class="btn btn-outline-danger"><h3>send</h3></button>
                    </div>
        </div>
		</div>
		<div class="col-md-4">
        <img src="" class="card-img-top" alt="...">
		</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</body>
</html>
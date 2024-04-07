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
    </style>

</head>
<body>
<div class="container-fluid">
<form action="acceuil2.php" method="post'>
<div class="row">
	<div class="col-md-12 mt-5 d-flex justify-content-center align-items-center">
			<div class="jumbotron">

            <?php
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Sélection de la base de données
if (!$conn->select_db($dbname)) {
    die("Sélection de la base de données a échoué : " . $conn->error);
}

// Récupération des données soumises via le formulaire
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$autres = $_POST['autres'];

// Requête SQL d'insertion des données dans la table
$sql = "INSERT INTO monprojet (prenom, nom, mail, autres) VALUES ('$prenom', '$nom', '$mail', '$autres')";

// Exécution de la requête SQL
if ($conn->query($sql) === TRUE) {
    echo "Les données ont été enregistrées avec succès dans la base de données.";
} else {
    echo "Erreur lors de l'enregistrement des données : " . $conn->error;
}

// Fermeture de la connexion à la base de données
$conn->close();
?>


		
				
                    <button type="submit" name="bouton4" class="btn btn-primary">continuer</button>
				</p>
			</div>
		</div>
	</div>
</form>


</div>
        </div>
  
        <div class="alert alert-primary d-flex align-items-center" role="alert">
            <?php
                $message = 'bonjour ' .$_POST['nom'] .', tu as sélectionné bien été enregistré ';
                
                echo $message;
            ?>
        </div>

        
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
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




    <div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4 mx-4 my-4">
           <h1> <p class=""text-center>Shops in my city</p></h1>
		</div>
		<div class="col-md-4">
		</div>
	</div>












	<div class="row my-4 mx-4">
		<div class="col-md-4">
            <p class="mt-5">
            At Monoprix, we understand the importance of convenience and quality. That's why we strive to provide our customers with a diverse range of high-quality products at competitive prices, all in a welcoming and friendly environment.

Whether you're looking for your everyday essentials or want to discover new products, Monoprix is here to serve you. Our dedicated team is always ready to help and guide you throughout the process.
            </p>
		</div>
		<divs class="col-md-8">
        <img src="https://www.lineaires.com/var/site/storage/images/_aliases/reference/4/4/7/0/3180744-1-fre-FR/1aDSC_4622.jpg" alt="Description de l'image" style="border: 5px solid black;" width="860" height="500" class="my-4 mx-4">
		</div>
	</div>
	<div class="row mx-5 my-5">
    <div class="col-md-4">
                    <p class="mt-4">
                     
                    We are proud to welcome you to your local Lidl store, where we are dedicated to providing you with an exceptional shopping experience. As a member of your community, we understand your unique needs and are committed to providing you with quality products at great prices, every day.

At Lidl, we believe in proximity and trust. That's why we work hard to bring you a diverse selection of products, from fresh foods to household essentials to weekly specials. We want you to be able to find everything you need, easily and affordably.

But at Lidl, it's not just about the products. It's also about service. Our dedicated team is here to greet you with a smile, answer your questions and help you find what you're looking for. We're here to make your shopping experience pleasant and hassle-free, every time.
 
 
                    </p>
    
                </div>
		<divs class="col-md-8">
        <img src="https://logistikadnes.sk/wp-content/uploads/2020/04/lidl.jpg" alt="Description de l'image" style="border: 5px solid black;" width="860" height="500" class="my-4 mx-4">
		</div>
            
    </div>
	<div class="row mx-5 my-5">
		<div class="col-md-4 mt-5 ">
        <p class="mt-5">
             
Discover Joinville's open-air market, a veritable paradise for lovers of organic and local produce!
Every week, our market comes alive with an abundance of fresh produce, grown with care by our local producers. We're proud to offer you an exclusive selection of organic fruits and vegetables, harvested when ripe for incomparable flavor. Our stands are also brimming with artisanal delights, local products that showcase the traditional know-how of our region.
For us, quality comes first. We work closely with our producers to ensure sustainable, environmentally-friendly farming practices. Every product you'll find on our shelves is grown with passion, without pesticides or harmful chemicals, for a healthy, balanced diet.
In addition to our delicious organic produce, our market offers a warm and friendly atmosphere where you can stroll in peace, chat with our passionate producers and discover new flavors. Whether you're looking for fresh produce for your daily meals or unique delights to brighten up your taste buds, you'll find everything you need at Joinville Market.

 
 
            </p>
		</div>
		<divs class="col-md-8 mt-5">
        <img src="https://www.joinville-le-pont.fr/wp-content/uploads/2018/07/DSC_1959.jpg" alt="Description de l'image" style="border: 5px solid black;" width="870" height="550" class="my-4 mx-4">
    
		</div>
	</div>
    
		



    



    <footer class="footer mt-5 py-3 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5> 
Contact
 
 </h5>
                <div>Email: yaomarcaurel373@gmail.com</div>
                <div> phone: +0658758508</div>
                <div>Adress: 22 Rue , PARIS, saint-maurice</div>
            </div>
            <div class="col-md-6">
                <h5> 
Useful links
 
 </h5>
                <ul class="list-unstyled">
                    <li><a href="#">autres</a></li>
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
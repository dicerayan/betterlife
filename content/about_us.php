<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--- <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">*/-->

    <!--<link rel="stylesheet" href="css/icon-font.css">-->

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style-about_us.css">
    <link rel="shortcut icon" type="image/png" href="../assets/img/logo.png">

    <title>Better Life Club | The best place for a better life</title>
</head>

<body>
    <header class="header">
        <div class="text-logo-box">
            <div class="logo-box">
                <img src="../assets/img/logo.png" alt="logo" class="logo">
            </div>

            <h1 class="heading-primary">
                <span class="heading-text">The best place for a better life</span>
            </h1>
        </div>
    </header>


    <nav id="navbar">
        <ul class="topnav" id="dropdownClick">
            <li><a href="../index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a class="on-it" href="about_us.php">About us</a></li>

            <li class="topnav-right">

                <form method="post" action="traitement.php">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                    <input class="search-input" type="text" placeholder="Search.." name="search">
                </form>

            </li>
			<li class="dropdown-icon"><a href="#" onclick="dropdownMenu()">&#9776;</a></li>
        </ul>
    </nav>


    <!-- presentation-->
    <div class="about_container">
        <img src="../assets/img/logo.png" class="ab_img">
        <p class="about_para">Better Life Club vous offre des cours de : Yoga, Karate, Aerobic, Natation, Danse, Afro, Latino, Konpa, Folklore, Hip-Hop dance, Ki-Zomba, self-Defense. Pour enfants et adultes Better Life Club spa pour vos seances de massage de bien-etre. Better Life Club vous propose egalement son espace attrayant pour vos celebrations de mariages et reception. Pour amples informations, ecrivez nous sur Betterlifeclub18@gmail.com ou passez nous voir a Vivy Mitchell Petion-ville Haiti. Better Life Club The best place for a better life!</p>
    </div>
<br/>
<br/>
<br/>
<br/>

    <!-- CAROUSSEL GRID PHOTO-->
    <div class="grid-foto">
        <div class="element"> <img class="photo-1" src="../assets/img/aquagym.jpg" > </div>
        <div class="element"> <img class="photo-2" src="../assets/img/karateka.jpg"> </div>
        <div class="element"> <img class="photo-3" src="../assets/img/konpa1.jpg"> </div>
        <div class="element"> <img class="photo-4" src="../assets/img/boxe.jpg"> </div>
        <div class="element"> <img class="photo-5" src="../assets/img/natation1.jpg"> </div>
        <div class="element"> <img class="photo-6" src="../assets/img/selfdefense1.jpg"> </div>
        
    </div>
    <br/>
    <br/>
    <!-- AVIS ET COMMENTAIRES-->
    <div class="avis-container">
        <div class="title-avis">
            Avis et Commentaires
        </div>
        <div class="sub-avi-container">
            <div class="avis-card">
                <div class="photo-profil">
                    <img class="img-profil" src="../assets/img/athlete-exercise-fitness-261185.jpg">
                </div>
                <div class="body-card">
                    <h1 class="titre-body-card">##################</h1>
                    <p class="para-body-card">$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$</p>
                    <h4 class="foot-body-card">^^!!!!##</h4>
                </div> 
            </div>

            <div class="avis-card">
                <div class="photo-profil">
                    <img class="img-profil" src="../assets/img/athlete-exercise-fitness-261185.jpg">
                </div>
                <div class="body-card">
                    <h1 class="titre-body-card">##################</h1>
                    <p class="para-body-card">$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$</p>
                    <h4 class="foot-body-card">^^!!!!##</h4>
                </div>
            </div>

            <div class="avis-card">
                <div class="photo-profil">
                    <img class="img-profil" src="../assets/img/athlete-exercise-fitness-261185.jpg">
                </div>
                <div class="body-card">
                    <h1 class="titre-body-card">##################</h1>
                    <p class="para-body-card">$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$</p>
                    <h4 class="foot-body-card">^^!!!!##</h4>
                </div>
            </div>

        </div>
        
    </div>

    <br />
    <br />
    <!-- footer -->
    <footer>
        <div class="footer-contain">
            <div class="first-part">
                <a href="#Facebook" alt="facebook.com"><img class="icon" src="../assets/img/fb.png" /></a>
               <a href="#Instagram" alt="instagram.com"> <img class="icon" src="../assets/img/ig.png" /></a>
               <a href="#Twitter" alt="twitter.com"> <img class="icon" src="../assets/img/twitter_icon.png" /></a>
            </div>
            <div class="second-part">
                <img class="icon" src="../assets/img/phone.png" /> (509) 38 73 8789
                <br /> <img class="icon" src="../assets/img/mail_icon.png" /> betterlifeclub18@gmail.com
    
            </div>
            <div class="third-part">
                146, Rue des Collines, Vivy Mitchell <br /> Petion-Ville, Haiti
            </div>
    
        </div>
        <br />
    
        <div class="footer-final">
            All Right reserved
            <br />Made by Tandem
            <br /> Octobre 2018
        </div>
    </footer>
	
	<script>
		function dropdownMenu() {
			 var x = document.getElementById("dropdownClick");
			 
			 if (x.className === "topnav") {
				x.className += " responsive";
			 } else {
			 x.className = "topnav";
			 }
		}
		
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
			if (prevScrollpos > currentScrollPos) {
				document.getElementById("navbar").style.top = "0";
			} else {
				document.getElementById("navbar").style.top = "-50px";
			}
			prevScrollpos = currentScrollPos;
		}
	</script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--- <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">*/-->

    <!--<link rel="stylesheet" href="css/icon-font.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="shortcut icon" type="image/png" href="assets/img/logo.png">

    <title>Better Life Club | The best place for a better life</title>
</head>

<body>
 <div class="position">  
  <header class="header">
        <div class="text-logo-box">
            <div class="logo-box">
                <img src="assets/img/logo.png" alt="logo" class="logo">
            </div>

            <h1 class="heading-primary">
                <span class="heading-text">The best place for a better life</span>
            </h1>
        </div>
    </header>


    <nav id="navbar">
        <ul class="topnav" id="dropdownClick">
            <li><a class="on-it" href="index.php">Home</a></li>
            <li><a href="content/products.php">Products</a></li>
            <li><a href="content/about_us.php">About us</a></li>

            <li class="topnav-right">
            
                  <form method="post" action="traitement.php">
                     <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                      <input class="search-input" type="text" placeholder="Search.." name="search">
                  </form>
               
            </li>
			<li class="dropdown-icon"><a href="#" onclick="dropdownMenu()">&#9776;</a></li>
        </ul>
    </nav>

    <!-- video part -->
    <video class="video" controls autoplay poster="assets/img/active-adult-aerobic-864990.jpg" width="100%" height="95%">
        <source src="assets/video/vid.mp4" type="video/mp4" />
    </video>

<br/>
    <!-- lets go -->
    <h1 class="letsgo">Let's Go!</h1>
<br/>
    <div class="reduction">

        <!--<div class="text-reduction">20% <br/> off <br/> on Asian arts
        </div>-->
	
        <img src="assets/img/yoga.jpg" alt="action" class="action-pic"/>
        <img src="assets/img/pingpong.jpg" alt="tennis" class="tennis-pic"/>
        <img src="assets/img/beautiful-bottle-daylight-1089146.jpg" alt="girl" class="girl-pic"/>

    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br />
    <br /><br />
    <br />
    <!-- footer -->
    <footer>
        <!--<div class="container-foto"></div>
        <div class="container-yelow"></div>
        <div class="container-black"></div>
        <div class="container-violet"></div>-->
        <div class="container">
            <div class="footer-find-us">Find us</div>
            <div class="footer_final footer-contain">
                <a href="https://goo.gl/maps/aRTkgvMSNfP2" alt="map-itineraire"><img class="footer-image" src="assets/img/map.jpg"/></a><!--exercise-exercise-equipment-fitness-209968.jpg-->
				
                <ul class="info-location">
					<div class="first-part">
						<li><a href="https://goo.gl/maps/aRTkgvMSNfP2" alt="map-itineraire" style="text-decoration:none;color: white">146,Rue des Collines, Vivy Mitchel</a></li>
						<li>Petion-Ville, Haiti</li>
					</div>
						<br/>
					<div class="second-part">
						<li>(509)3873 8789 <img class="icon-home" src="assets/img/phone.png" alt=""/></li>
						<br/>
						<li>betterlifeclub18@gmail.com <img class="icon-home" src="assets/img/mail_icon.png" alt=""/></li>
					</div>
						<br/>
					<div class="third-part">
						<li>
							<a href="#Facebook" alt="facebook.com"><img class="icon-home" src="assets/img/fb.png" /></a>
							<a href="#Instagram" alt="instagram.com"><img class="icon-home" src="assets/img/ig.png" /></a>
							<a href="#Twitter" alt="twitter.com"><img class="icon-home" src="assets/img/twitter_icon.png" /></a>
						</li>
					</div>
                </ul>
            </div>
        </div>
        
        <div class="footer-fin">
            All Right reserved
            <br />Made by Tandem
            <br /> Octobre 2018
        </div>
	</div>
    </footer>
</div>

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

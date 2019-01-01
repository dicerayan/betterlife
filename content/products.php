<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--- <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">*/-->

    <!--<link rel="stylesheet" href="css/icon-font.css">-->

   <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style-products.css">
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
            <li><a class="on-it" href="products.php">Products</a></li>
            <li><a href="about_us.php">About us</a></li>

            <li class="topnav-right">

                <form method="post" action="traitement.php">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                    <input class="search-input" type="text" placeholder="Search.." name="search">
                </form>

            </li>
			<li class="dropdown-icon"><a href="#" onclick="dropdownMenu()">&#9776;</a></li>
        </ul>
    </nav>

    <!-- all cards
    <div class="pokofet">
    </div>-->
<div class="part-1">
		<div class="containers">
			<div class="card-img card-img-1">
				<div class="heading-2">
					<h2><a href="try.php?content=yoga">Yoga</a></h2>
				</div>
			</div>
			
			<div class="card-img card-img-2">
				<div class="heading-2">
					<h2><a href="try.php?content=natation">Natation</a></h2>
				</div>
			</div>
			<div class="card-img card-img-3">
				<div class="heading-2">
					<h2><a href="try.php?content=aerobic">Aerobic</a></h2>
				</div>
			</div>
		</div>
		<div class="containers">
			<div class="card-img card-img-4">
				<div class="heading-2">
					<h2><a href="try.php?content=karate">Karate</a></h2>
				</div>
			</div>
			<div class="card-img card-img-5">
				<div class="heading-2">
					<h2><a href="try.php?content=selfdefense">Self-defense</a></h2>
				</div>
			</div>
			<div class="card-img card-img-6">
				<div class="heading-2">
					<h2><a href="try.php?content=pingpong">Ping-pong</a></h2>
				</div>
			</div>
		</div>
	</div>	
	<div class="part-2">	
		<h1>Dance</h1>
		<div class="containers">
			<div class="card-img card-img-7">
				<div class="heading-2">
					<h2><a href="try.php?content=afro">Afro</a></h2>
				</div>
			</div>
			<div class="card-img card-img-8">
				<div class="heading-2">
					<h2><a href="try.php?content=latino">Latino</a></h2>
				</div>
			</div>
			<div class="card-img card-img-9">
				<div class="heading-2">
					<h2><a href="try.php?content=folklore">Folklore</a></h2>
				</div>
			</div>
		</div>
		
		<div class="containers">
			<div class="card-img card-img-10">
				<div class="heading-2">
					<h2><a href="try.php?content=afro">Afro</a></h2>
				</div>
			</div>
			<div class="card-img card-img-11">
				<div class="heading-2">
					<h2><a href="try.php?content=latino">Latino</a></h2>
				</div>
			</div>
			<div class="card-img card-img-12">
				<div class="heading-2">
					<h2><a href="try.php?content=folklore">Folklore</a></h2>
				</div>
			</div>
		</div>
	</div>
	</div>	-->


    <footer>
        <div class="footer-contain">
            <div class="first-part">
                <a href="#Facebook" alt=".com"><img class="icon" src="../assets/img/fb.png" /></a>
               <a href="#Instagram" alt=".com"> <img class="icon" src="../assets/img/ig.png" /></a>
                <a href="#Twitter" alt=".com"><img class="icon" src="../assets/img/twitter_icon.png" /></a>
            </div>
            <div class="second-part">
                <img class="icon" src="../assets/img/phone.png" /> (509) 45 67 89 00
                <br/> <img class="icon" src="../assets/img/mail_icon.png" /> betterlifeclub18@gmail.com

            </div>
            <div class="third-part">
                146, Rue des Collines, Vivy Mitchell <br/> Petion-Ville, Haiti
            </div>

        </div>
        <br/>

        <div class="footer-final">
            All Right reserved
            <br/>Made by Tandem
            <br/> Octobre 2018
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
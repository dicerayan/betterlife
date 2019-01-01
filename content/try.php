<?php


if (isset($_GET['content'])) 
{
	$content = htmlspecialchars($_GET['content']);
	$value = ['yoga', 'natation', 'aerobic', 'karate', 'selfdefense', 'pingpong', 'afro', 'latino', 'folklore'];
	
	
	if(in_array($content, $value)) {
	
		 $content = $content;
		
	}
	else 
	{
		header('location: products.php');
	}
}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/png" href="../assets/img/logo.png">
		<title>
			<?php 
				echo $content;
				?>
		</title>
		<link rel="stylesheet" href="../assets/css/try_style.css" />
	</head>
	
	<body>
		<div class="position">
			<header>
				<div class="logo-box">
					<img src="../assets/img/logo.png" alt="logo" class="logo" />
				</div>
				<div class="middle-top">
					<h2>the best place for a better life</h2>
				</div>
			</header>
			
			<div class="nav-container" id="dropdownClick">
				<div class="nav-item"><a href="../index.php" class="nav-link">HOME</a></div>	
				<div class="nav-item"><a href="products.php" class="nav-link">PRODUCTS</a></div>	
				<div class="nav-item"><a href="about_us.php" class="nav-link">ABOUT US</a></div>
				<div class="nav-item apart">
					<form class="search" method="post" action="traitement.php">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
						<input class="input" type="text" placeholder="Search.." name="search">
					</form>

					
				</div>
				<div class="nav-item dropdown-icon"><a href="#" onclick="dropdownMenu()">&#9776;</a></div>
			</div>
		</div>	
				
				<!-- ############## Middle ############### -->
				
		<div class="main">
			<div class="img-box" style="background-image: url(<?php if (isset($content)){echo '../assets/img/'.$content. '.jpg';}else {header('location: products.php');} ?>)">
				<div class="middle">
					<h1 class="heading-yoga">
						<?php if (isset($content)){ echo $content;}else{header('location: products.php');}?>
					</h1>
					<p class="p-yoga">bla bla blablabla bla bla bla bla bla bla blabla blablablabla bla bla bla bla la bla bla bla blablablablablabla blabla bla blablabla bla</p>
					<h3 class="heading-money"><span class="money-talk">$35</span>/month</h3>-->
				</div>
			</div>
			
			
			<section class="container">
				<div class="row">
					<div class="col-3 im">
						<div class="im">
							<ul class="nav-left  element">
								<li class="rotate">Monitors</li>
								<li class="rotate">Schedule</li>
								<li class="rotate none">Comments</li>
							</ul>
						</div>
					</div>
					
					<div class="col-3 a">
						<div class="marg">
							<div class="radiusImg element">
								<img src="../assets/img/yoge.jpg" alt="yoge" class="borderImg" />
								
							</div>
							<div class="marg-left">
								<label>Mr XY</label>
								<p>Lundi: 5:00PM-6h:30PM</p>
								<p>Lundi: 5:00PM-6h:30PM</p>
								<p>Lundi: 5:00PM-6h:30PM</p>
							</div>
						</div>
					</div>
					
					<div class="col-3 b">
					</div>
					
					<div class="col-3 c">
						<div class="marg">
							<div class="radiusImg  element">
								<img src="../assets/img/abdos.jpg" alt="yoge" class="borderImg" />
							</div>
							<div class="marg-left">
								<label>Mr XY</label>
								<p>Lundi: 5:00PM-6h:30PM</p>
								<p>Lundi: 5:00PM-6h:30PM</p>
								<p>Lundi: 5:00PM-6h:30PM</p>
							</div>
						</div>
					</div>
				</div>

				</section>
				
				
				
			<!-- ############### Reservation ########### -->
			
			<div class="col-8">
				<div class="relative">
						<div class="try">
							<div class="comment"><img src="../assets/img/try.png" alt="profil" class="profil" /><span class="border">ffefwfwfwwfwfwff</span></div>
						</div>
				
			</div>		
				</div>
				
				<div class="reservation">
						<h2 class="heading-2">Reservation</h2>
						
						<form class="form" method="post" action="traitement.php">
							<div class="aside">
								<label for="nom">Nom:</label><input type="text" name="nom" id="nom"/>
								<br>
								<label for="prenom">Prenom:</label><input type="text" name="prenom" id="prenom"/>
								<br>
							</div>
							<div class="aside side">
								<label for="email">email:</label><input type="email" name="email" id="email"/>
								<br>
								<label for="telephone">Telephone:</label><input type="tel" name="telephone" id="telephone"/>
								<br>
								<input type="submit" value="Envoyer" name="sent" />
							</div>
						</form>
				</div>	
								
							
			
					<!-- ################# Footer ############### -->
		</div>
		
			<footer>
				<div class="footer">
					<div class="socialmedia">
						<a href="#"><img src="../assets/img/fb.png" alt="logo-facebook" /></a>
						<a href="#"><img src="../assets/img/ig.png" alt="logo-facebook" /></a>
						<a href="#"><img src="../assets/img/twitter_icon.png" alt="logo-facebook" /></a>
					</div>
					
					<div class="contact border1">
						<p><img src="../assets/img/phone.png" alt="phone" /> (509) 3873 8789</p>
						<p><img src="../assets/img/mail_icon.png" alt="email" /> <a href="#"> betterlifeclub18@gmail.com</a></p>
					</div>
					
					<div class="address border1">
						<p>146, Rue des Collines, Vivy Mitchell <span class="decalage">Petion-Ville Haiti</span></p>
					</div>
				</div>
				<div class="footer-final">
					All Right reserved
					<br/> Octobre 2018
				</div>
			</footer>
			

	<script>
		function dropdownMenu() {
			 var x = document.getElementById("dropdownClick");
			 
			 if (x.className === "nav-container") {
				x.className += " responsive";
			 } else {
			 x.className = "nav-container";
			 }
		}
	</script>
		
	</body>
</html>
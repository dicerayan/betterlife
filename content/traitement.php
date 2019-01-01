<?php 

try
{
	$bd = new PDO('mysql:host=localhost;dbname=betterlife', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : ' .$e->getMessage());
}

$q = $bd->query('SELECT id, nom, prenom, email, telephone, adresse FROM reservation');

while ($data = $q->fetch())
{
	echo $data['id'] . ' ' .$data['nom'] . ' ' .$data['prenom'] . ' ' .$data['email'] . ' ' .$data['telephone'] . ' ' .$data['adresse'], '<br>';
}

$q->closeCursor();

if (isset($_POST['sent'])) 
{
	if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['telephone']))
	{
		$nom = htmlspecialchars($_POST['nom']);
		$prenom =	htmlspecialchars($_POST['prenom']);
		$email = htmlspecialchars($_POST['email']);
		$telephone = htmlspecialchars($_POST['telephone']);
		
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
		{	// verifying if NOM already esits
			$nomexist = $bd->prepare('SELECT id FROM reservation WHERE nom = ?');
			$nomexist->execute(array($nom));
			$nomexist = $nomexist->rowCount();
			
				// verifying if PRENOM already esits
			$prenomexists = $bd->prepare('SELECT id FROM reservation WHERE prenom = ?');
			$prenomexists->execute(array($prenom));
			$prenom = $prenomexists->rowCount();
			
			// verifying if Email already esits
			$mailexists = $bd->prepare('SELECT id FROM reservation WHERE email = ?');
			$mailexists->execute(array($email));
			$mailexists = $mailexists->rowCount();
			
			if ($nomexist == 0 AND $prenomexists == 0 AND $mailexists == 0)
			{
			
			
			
			
				$q = $bd->prepare('INSERT INTO reservation(nom, prenom, email, telephone) VALUES(:nom, :prenom, :email, :telephone)');

				$q->execute(array('nom' => $nom,
							   'prenom' => $prenom,
							   'email' => $email,
							   'telephone' => $telephone	  
							   ));

				echo 'Reservation reussie';
			}
			else
			{
				echo 'Vous avez deja fait une Reservation, Merci<br>';
				echo 'Vous avez deja fait une Reservation, Merci<br>';
			}
		}
		else 
		{
			echo "veuillez entrer une email valide";
		}
		
	}
	else{
		echo 'empty';
	}
}
else
{
	
}
?>
<?php
session_start();
?>
<!doctype html>

<html lang="fr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/style.css">
      
      <title>DOSE2SNEAKERS</title>
      
  </head>
    
 <body class="contact">
        
            
            <!--navbar-->
            
            <?php include("commun/navbar.php"); ?>
            
            
            <h2 class="titrecontact titre">DOSE2SNEAKERS</h2>
<!--     formulaire  -->
<?php

if (!empty($_POST)){

		
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=blog_benjamin;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
			die('Erreur : '.$e->getMessage());
	}

	// inscription utilisateur
	// controle des données et enregistrement en base

	if (isset($_POST['inscription'])) {
		if (empty($_POST['pseudo']) || empty($_POST['mail']) || empty($_POST['mdp'])){
			$err = true;
			
			$msg = "Merci de remplir tous les champs du formulaire";
			
		} else {

			if(strlen($_POST['mdp']) < 6 && strlen($_POST['mdp']) !== strlen($_POST['mdp2'])){

			$msg = 'Mot de passe trop court ! ou ne sont pas identiques';

			} else {
			
			//recup variables form POST (all data protect by htmlspecialchars)
		
			function verify_input($input){
				$input = trim($input);
				$input = stripcslashes($input);
				$input = htmlspecialchars($input);
				return $input;
			}

			// check si l'utilisateur existe
			$pseudo = verify_input($_POST['pseudo']);
			$mail = verify_input($_POST['mail']);
			$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

			$requser = $bdd->prepare("SELECT * FROM inscription WHERE pseudo = ? AND mail = ? AND mdp= ?");
			$requser->execute(array($pseudo, $mail, $mdp));
			$userexist = $requser->rowCount();
			
			if($userexist === 1){
				$msg = ' Vous avez déja un compte ! Veuillez vous connectez.';
				}
			else
				{
				// send message in database
				$req = $bdd->prepare('INSERT INTO inscription(pseudo, mail, mdp) VALUES(:pseudo, :mail, :mdp)');
				$req->execute([
						'pseudo' => $pseudo,
						'mail' => $mail,
						'mdp' => $mdp
						]);
			
				$msg = 'votre compte à bien été créer ! Bienvenue ! ';
			
				}
			}
		$msg;
	}
	}

	// connection utilisateur
	// mémorisation variables utiilisateur en session
	if(isset($_POST['connection']))
	{
		$mailconnect = ($_POST['mailconnect']);
		$pseudoconnect = ($_POST['pseudoconnect']);
		$mdpconnect = ($_POST['mdpconnect']);

	
		if (!empty($mailconnect) AND !empty($pseudoconnect) AND !empty($mdpconnect)) 
		{
			$requser = $bdd->prepare("SELECT * FROM inscription WHERE pseudo = ? AND mail = ? AND mdp= ?");
			$requser->execute(array($pseudoconnect, $mailconnect, $mdpconnect));
			$userexist = $requser->rowCount();
			if($userexist == 1)	{
				$userinfos = $requser->fetch();
				$_SESSION['id'] = $userinfos['id'];
				$_SESSION['pseudo'] = $userinfos['pseudo'];
				$_SESSION['mail'] = $userinfos['mail'];
				$_SESSION['mdp'] = $userinfos['mdp'];
				header('Location: blog2sneakers.php');
			} else {
				echo 'Les identifiants sont incorrects';
			}
		} else{
			echo 'Tout les champs doivent etre remplis';
		}
	
	}	
};


?>


<div class="container-fluid">
<div class="row">
<div class="col">
<p>Vous n'avez pas de compte ?<br/><h3>Inscrivez-vous !</h3><p>
<form method="POST"	action="contact.php">
<p class="alert-warning py-4 text-danger font-weight-bold"><?= $msg ?></p>
  <div class="form-group">
    <label for="pseudo">Votre pseudo :</label>
    <input type="text" class="form-control" id="pseudo" name="pseudo" aria-describedby="pseudohelp" placeholder="Entrer votre pseudo">
	<div class="form-group">
    <label for="mail">Votre mail :</label>
    <input type="text" class="form-control" id="mail" name="mail" aria-describedby="mailhelp" placeholder="Entrer votre mail">
  </div>
  <div class="form-group">
    <label for="mdp">Mot de passe : </label>
    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe">
  </div>
  <div class="form-group">
    <label for="mdp2">Confirmer votre mot de passe :</label>
    <input type="password" class="form-control" id="mdp2" name="mdp2" placeholder="Mot de passe">
  </div>
  <button type="submit" name="inscription" class="btn btn-primary">Inscription</button>
</form>
</div>
</div>
<hr>
<div class="col">
<p>Vous avez déja un compte ?<h3>Connectez-vous !</h3></p>
<div class="formulaireconnection">
<div class="container-fluid">
<form method="POST"	action="contact.php">	
  <div class="form-group">
    <label for="pseudo">Votre pseudo :</label>
    <input type="text" class="form-control" id="pseudoconnect" name="pseudoconnect" aria-describedby="pseudohelp" placeholder="Entrer votre pseudo">
	<div class="form-group">
    <label for="mail">Votre mail :</label>
    <input type="text" class="form-control" id="mailconnect" name="mailconnect" aria-describedby="mailhelp" placeholder="Entrer votre mail">
  </div>
  <div class="form-group">
    <label for="mdp">Mot de passe : </label>
    <input type="password" class="form-control" id="mdpconnect" name="mdpconnect" placeholder="Entrer votre mot de passe">
  </div>
  <button type="submit" name="connection"class="btn btn-primary">Connection</button>
</form>
</div>
</div>
</div>
</div>

</body>
</html>
      















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
<body class="connection">
<?php
session_start();

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blog_benjamin;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

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


?>

<form method="POST"	action="connection.php">	
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

</body>
</html>
<?php
$dbh = new PDO('mysql:host=localhost;dbname=blog_benjamin', 'root', '');
// Vérification de la validité des informations

// Hachage du mot de passe
$pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO inscription(pseudo, mail, mdp) VALUES(:pseudo, :mail, :mdp CURDATE())');
$req->execute(array(
    'pseudo' => $pseudo,
    'mdp' => $pass_hache,
    'mail' => $mail));




?>

<div align="center">
			<h2>Inscription</h2>
			</br></br></br>
			<form method="POST"	action="contact.php">
				<table>
					<tr>
						<td align="right">
							<label for="pseudo">Pseudo : </label>
						</td>
						<td align="right">	
							<input type="text"
							placeholder="Votre pseudo" id="pseudo"
							name="pseudo">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mail">Adresse mail : </label>
						</td>
						<td align="right">	
							<input type="text"
							placeholder="Votre mail" id="mail"
							name="mail">
						</td>
					</tr>		
					
						<tr>
						<td align="right">
							<label for="mdp">Mot de passe : </label>
						</td>
						<td align="right">	
							<input type="password"
							placeholder="Votre mot de passe" id="mdp"
							name="mdp">
						</td>
					</tr>		
						<tr>
						<td>
							<label for="mdp2">Confirmez votre mot de passe : </label>
						</td>
						<td>	
							<input type="password"
							placeholder="Confirmez le mdp" id="mdp2"
							name="mdp2">
						</td>
					</tr>
					</table></br>	
							<input type="submit" name ="forminscription" value="M'inscrire"/>

							</br></br>

</form>
</div>

</body>
</html>
      



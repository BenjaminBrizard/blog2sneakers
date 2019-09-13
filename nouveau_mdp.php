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
     if(isset($_SESSION['id'])){
         header('Location: blog2sneakers.php');
         exit;
     }

     if(!empty($_POST)){
         extract($_POST);
         $valid = true;

         if(isset($_POST['oublie'])){

            $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail afin d'envoyer le mail pour la récupération du mot de passe

            // Si le mail est vide alors on ne traite pas
            if(empty($mail)){
                $valid = false;
                $er_mail = "Il faut un mail";
            }

            if($valid){
                $verification_mail = $DB->query("SELECT pseudo, mail, nouveau_mdp FROM inscription WHERE mail = ?", array($mail));
                $verification_mail = $verification_mail->fetch();

                if(isset($verification_mail['mail'])){
                    if($verification_mail['nouveau_mdp'] ==0){
                        // génération d'un nouveau mot de passe
                        $nouveau_mdp = rand(6, 15);

                        // le mieux serait de générer un nombre aléatoire entre 7 et 10 caractères avec la fonction RANDOM
                        $nouveau_mdp_crypt = crypt($nouveau_mdp, '$kjvjfkezpof767890kqjbsvn987dsnkf987$');

                        $objet = 'Nouveau mot de passe';
                        $to = $verification_mail['mail'];

                        //===== Création du header du mail
                        $header = "From: NOM_DE_LA_PERSONNE <no-reply@test.com> \n";
                        $header .= "Reply-To: ".$to. "\n";
                        $header .= "MIME-version: 1.0\n";
                        $header .= "Content-type: text/html; charset=utf-8\n";
                        $header .= "Content-Transfer-Encoding: 8bit";

                        //===== Contenu de votre message
                        $contenu = "<html>".
                            "<body>".
                            "<p style='text-align: center; font-size: 18px'><b>Bonjour Mr, Mme".$verification_mail['pseudo']."</b>,</p><br/>".
                            "<p style='text-align: justify'><i><b>Nouveau mot de passe : </b></i>".$nouveau_mdp."</p><br/>".
                            "</body>".
                            "</html>";

                        //===== Envoi du mail
                        mail($to, $objet, $contenu, $header);

                        $DB->insert("UPDATE inscription SET mdp = ?, nouveau_mdp = 1 WHERE mail = ?", array($new_pass_crypt, $verification_mail['mail']));

                    }
                }
                header('Location: contact.php');
                exit;
            }
         }
     }
     ?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Mot de passe oublié</title>
    </head>

    <body>
        <div>Mot de passe oublié</div>
        <form method="post">

            <?php
                if (isset($er_mail)){
            ?>

                <div><?= $er_mail ?></div>
            <?php

                }
            ?>


            <input type="mail" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){echo $mail; }?>" required>

            <button type="submit" name="oublie">Envoyer</button>
        </form>
    </body>
</html>




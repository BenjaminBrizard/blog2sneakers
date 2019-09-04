<?php

//connection bdd
try {
    $bdd = new PDO('mysql:host=localhost;dbname=blog_benjamin', 'root' , '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
/*var_dump($bdd);
var_dump($_POST);*/

//verification de la variable envoyer
$message="";
if(isset($_POST['envoyer']))
{
   //verification que $pseudo et $commentaire ne sont pas vide
    if (!empty($_POST['pseudo']) AND !empty($_POST['commentaire']))
    {
         //sécu impossible envoyer du html
         $code_produit = htmlspecialchars($_POST['code_produit']);
         $pseudo = htmlspecialchars($_POST['pseudo']);
         $commentaire = htmlspecialchars($_POST['commentaire']);
        
        
// definition de la variable pseudolenght avec l utilisation de la fonction strlen
         $pseudolenght = strlen($pseudo);
            if ($pseudolenght <= 20) 
                {
                }
            else
                {
                    $message = "Votre pseudo est trop long";
                }   
           
 //definition de la varibale commentaire lenght via la fonction strlen          
            $commentairelenght = strlen($commentaire);
            
            if($commentairelenght <= 255)
                {
//si tout est ok
//requete de preparation            
                    try {
                        $insertmbr = $bdd->prepare("INSERT INTO commentaires (code_produit,pseudo,commentaire) VALUES (?,?,?)");
                    }
                    catch(Exception $e)
                    {
                        die('Erreur : '.$e->getMessage());
                    }                    
// var_dump($insertmbr);

// execution de la requete                     
                    try {
                        $insertmbr->execute(array($code_produit,$pseudo,$commentaire));

                    }
                    catch(Exception $e)
                    {
                        die('Erreur : '.$e->getMessage());
                    }
// var_dump($insertmbr);

//si tout a bien été executé alors :
                    $message = "merci pour ton com";  
                }
            
            else
                {
                    $message = "non envoyé";
        }       
        
}
            else
                {
                    $message = "Tous les champs doivent être complétés !";
                }


}
 

$reponse = $bdd->query('SELECT pseudo, commentaire FROM commentaires ORDER BY id DESC LIMIT 0, 5');
while ($donnees = $reponse->fetch()){
?>
    <div class="row commentaire">
        <div class="col-sm-12">
            <p class="pseudo"><?php echo $donnees['pseudo'] ?></p>
            <p class="com"><?php echo $donnees['commentaire'] ?></p>
        </div>
    </div>

<?php
}

echo $message;


?>
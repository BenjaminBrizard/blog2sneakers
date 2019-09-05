
<!doctype html>
<html lang="fr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="../css/style.css">
      
      <title>DOSE2SNEAKERS</title>
      
  </head>
    
 <body>
        
            
<!--navbar-->
            
            <?php include("../commun/navbar.php"); ?>
            
        <!--     liste déroulante   -->

        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Voir les autres articles de la section
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="article_air_max_plus.php">Air max Plus 20ème anniversaire</a>
    <a class="dropdown-item" href="article_m2k.php">La M2K</a>
    <a class="dropdown-item" href="article_tailwind.php">La Tailwind 4 OG</a>
  </div>
</div>
     
<!--     article   -->
     
     <h2> Air Max Tokyo Maze</h2>
        <p> Lancé en 2018, le programme Nike "On Air" a permis à de nombreux créateurs de créer des paires inspirées de leur ville et de leur culture. L'artiste et designer Yuta Takuman s'est occupé de la air max 1 qu'on pourrait également surnommer le "Labyrinthe de Tokyo".<br/> Le designe rappelle fortement la multitudes de lignes de métro aux couleurs vives. La paire est accompagnée de plusieurs scratchs pour la languette ainsi que 5 paires de laçets différents. J'ai pu la cop au moment de sa sortie à 9h sur l'application sneakers de Nike, je l'avais ciblé depuis un moment mais super surprise quand j'ai reçu le mail de confirmation. 130 euros au moment de sa sortie.</p>

        


  <!--     images   -->
           
       <div class="photobasket">
         
       <a href="../images/macollection/Airmaxtokyomaze/boiteairmaxmax4.jpg"><img src="../images/macollection/Airmaxtokyomaze/boiteairmax.jpg" class="img-fluid" alt="Responsive image"></a>
       <a href="../images/macollection/Airmaxtokyomaze/airmax1max1.jpg"><img src="../images/macollection/Airmaxtokyomaze/airmax1.jpg" class="img-fluid" alt="Responsive image"></a>
       <a href="../images/macollection/Airmaxtokyomaze/airmax2max2.jpg"><img src="../images/macollection/Airmaxtokyomaze/airmax2.jpg" class="img-fluid" alt="Responsive image"></a>
       <a href="../images/macollection/Airmaxtokyomaze/airmax3max3.jpg"><img src="../images/macollection/Airmaxtokyomaze/airmax3.jpg" class="img-fluid" alt="Responsive image"></a>
      </div>
          
  <!--     formulaire   -->

  <h4 class="espacecom">Espace Commentaires</h4> 
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Laisse un commentaire ! 
  </a>
  <div class="collapse" id="collapseExample">
    <div class="card card-body">
    <div class="row">
        <div class="col-sm-12"> 
            <div class="formulaire">
                <form method="POST" class="form" action="article_air_max_tokyomaze.php">
                    <div class="form-group">
                        <label for="name">Votre pseudo</label>
                            <input type="text" name="pseudo" required placeholder="Entrer votre pseudo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="commentaire">Votre message</label>
                        <textarea class="form-control" name="commentaire" required></textarea>
                    </div>
                      <input name="code_produit" type="hidden" value="air_max_tokyomaze">  
                        <button type="submit" class="btn-primary btn" name="envoyer" value="envoyer">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

    <?php include("../commentaires.php"); ?>
     
    </body>
</html>
     
        
     
     
     
     
     
     
     
     
     
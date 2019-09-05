
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
     
<!--     navbar  -->
     
            
        <?php include("../commun/navbar.php"); ?>
            
        <!-- Liste déroulante -->

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Voir les autres articles 
          </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="article_m2k.php">La M2K</a>
          <a class="dropdown-item" href="article_air_max_Tokyomaze.php">Air max Tokyo Maze</a>
          <a class="dropdown-item" href="article_tailwind.php">La Tailwind 4 OG</a>
        </div>
        </div>
     
<!--     article  -->
     <h2> Air Max Plus PARIS</h2>
     
        <p>Pour les 20 ans d'une des plus célebre des Air Max, celle qu'on a l'habitude d'appeller la TN ou la requin, Nike a imaginé une édition riche en couleur qu'elle nommera la Air Max Plus PARIS.<br/> La paire est un hommage au modèle créer par Sean McDowell en associant les 2 couleurs OG phares de cette paire ;Tiger et Hyper blue. Le motif triangulaire rappelle les dents de requins.<br/> On peut lire sur les aglets des laçets " Tuned Since 1998 ". Pour ma part j'ai pu la cop dans le célébre Opium rue Saint-Denis au prix de 170 euros.</p>



  <!-- images -->

  <div class="photobasket">
        
        <a href="../images/macollection/Airmaxplus/airmaxplusboitemax.jpg"><img src="../images/macollection/Airmaxplus/airmaxplusboite.jpg" class="img-fluid" alt="Responsive image"></a>
        <a href="../images/macollection/Airmaxplus/airmaxplus1max.jpg"><img src="../images/macollection/Airmaxplus/airmaxplus1.jpg" class="img-fluid" alt="Responsive image"></a>
        <a href="../images/macollection/Airmaxplus/airmaxplus2max.jpg"><img src="../images/macollection/Airmaxplus/airmaxplus2.jpg" class="img-fluid" alt="Responsive image"></a>
        <a href="../images/macollection/Airmaxplus/airmaxplus3max.jpg"><img src="../images/macollection/Airmaxplus/airmaxplus3.jpg" class="img-fluid" alt="Responsive image"></a>
        
    </div>    
    
  <!-- formulaire -->
  <h4 class="espacecom">Espace Commentaires</h4>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Laisse un commentaire ! 
  </a>
  <div class="collapse" id="collapseExample">
    <div class="card card-body">
    <form method="POST" action="article_air_max_plus.php">
   
        <div class="row">
        <div class="col-sm-12"> 
            <div class="formulaire">
                <form method="POST" class="form" action="article_air_max_plus.php">
                    <div class="form-group">
                        <label for="name">Votre pseudo</label>
                            <input type="text" name="pseudo" required placeholder="Entrer votre pseudo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="commentaire">Votre message</label>
                        <textarea class="form-control" name="commentaire" required></textarea>
                    </div>
                      <input name="code_produit" type="hidden" value="air_max_plus">  
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
     
     

     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
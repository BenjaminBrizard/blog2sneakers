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
        
           <!--     liste déroulante  -->

        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Voir les autres articles de la section
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="article_air_max_plus.php">Air max Plus 20ème anniversaire</a>
    <a class="dropdown-item" href="article_air_max_tokyomaze.php">Air max Tokyo Maze</a>
    <a class="dropdown-item" href="article_tailwind.php">La Tailwind 4 OG</a>
  </div>
</div> 
        
     
<!--     article  -->
     
     <h2> Nike M2K</h2>
        <p>D'abord commercialisé uniquement pour femme, la M2K arrivera plus tard pour le plaisir de la gente masculine. La paire a été présentée lors du défilé de John Elliott Fall/Winter 2018.<br/> Pour ma part on me l'a offerte. On peut voir 2 swosh sur la paire, de taille différentes, l'un en blanc et l'autre en noir. Disponible chez la plupart des revendeurs Nike pour la somme de 100 euros</p>
     


<!--     images  -->

     <div class="photobasket">
         
     <a href="../images/macollection/mk/mkboitemax.jpg"><img src="../images/macollection/mk/mkboite.jpg" class="img-fluid" alt="Responsive image"></a>
     <a href="../images/macollection/mk/m2kmax1.jpg"><img src="../images/macollection/mk/m2k1.jpg" class="img-fluid" alt="Responsive image"></a>
     <a href="../images/macollection/mk/m2kmax2.jpg"><img src="../images/macollection/mk/m2k2.jpg" class="img-fluid" alt="Responsive image"></a>
     <a href="../images/macollection/mk/m2kmax3.jpg"><img src="../images/macollection/mk/m2k3.jpg" class="img-fluid" alt="Responsive image"></a>
     </div>
     
<!--     formulaire  -->

<?php $info = "m2k"; ?>

<h4 class="espacecom">Espace Commentaires</h4> 
<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Laisse un commentaire ! 
  </a>

  <?php include("../formulaireCommentaire.php"); ?>

<?php include("../commentaires.php"); ?>
     
    </body>
</html>
     
     
     
     
     
     
     
     
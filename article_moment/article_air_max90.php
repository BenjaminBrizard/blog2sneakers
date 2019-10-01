
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
            
         <!--     liste déroulante  -->

        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
  Voir les autres articles de la section

  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="article_air_force1.php">Air Force 1 Low Black Tie Dye</a>
    <a class="dropdown-item" href="article_air_max_shematic.php">Air max 1 Shematic</a>
    <a class="dropdown-item" href="article_parra.php">Dunk Parra</a>
  </div>
</div>   
            
<!--     article  -->
     
     <h2>Air max 90 Viotech</h2>
        <p>Ce combo de couleurs avait été appliqué au début des années 2000 sur une sortie réservée au Japon, elle portait également le surnom de CO.JP.<br/>Cependant, ce n’est pas la seule paire concernée puisque l’équipementier sportif a décidé de l’utiliser sur un de ses modèles classiques, la Nike Air Max 90. Cette silhouette semble préparer son grand retour, après avoir été rhabillée notamment pour la collection Be True. Ce modèle iconique des années 1990, imaginé par Tinker Hatfield, nous est donc aujourd’hui présenté toute en couleurs qui saura se faire remarquer.</p>
     


<!--     images  -->

  <div class="photobasket">
    <a href="../images/lespairesdumoment/airmax90/airmax90max1.jpg"><img src="../images/lespairesdumoment/airmax90/air_max90_1.jpg" class="img-fluid" alt="Responsive image"></a>
    <a href="../images/lespairesdumoment/airmax90/airmax90max2.jpg"><img src="../images/lespairesdumoment/airmax90/air_max90_2.jpg" class="img-fluid" alt="Responsive image"></a>
    <a href="../images/lespairesdumoment/airmax90/airmax90max3.jpg"><img src="../images/lespairesdumoment/airmax90/air_max90_3.jpg" class="img-fluid" alt="Responsive image"></a>
  </div>
  
  <!--     formulaire  -->

  <?php $info = "air_max90"; ?>

  <h4 class="espacecom">Espace Commentaires</h4>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Laisse un commentaire ! 
  </a>
  
  <?php include("../formulaireCommentaire.php"); ?>

     <?php include("../commentaires.php"); ?>
     
    </body>
</html>
     
     
     
     
     
     
     
     
     
     

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
            
      <!-- Liste déroulante -->

<div class="dropdown">

<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Voir les autres articles de la section
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item" href="article_air_max_shematic.php">Air max Shematic</a>
<a class="dropdown-item" href="article_air_max90.php">Air max 90 Viotech</a>
<a class="dropdown-item" href="article_parra.php">Parra Dunk</a>
</div>
</div>      
     
<!--     article  -->
     
     <h2> Air force 1 Low Black Tie Dye</h2>
     <p>En parallèle à la Nike React Element 55 Tie Dye, la marque de Beaverton nous présente une nouvelle itération inspirée des années 60 et du mouvement hippie. La silhouette B-ball dispose d’une conception en cuir noir, agrémentée de superpositions teintes dans le style "tie dye". Ce procédé consiste à teindre des tissus de manière artisanale dans un bain de teintures multicores. Des lacets noirs, un swoosh latéral surligné de blanc, ainsi qu’une semelle assortie, finalisent le design de Bruce Kilgore.</p>
     


<!-- images -->
    <div class="photobasket">
        <a href="../images/lespairesdumoment/airforce1/airforce1max2.jpg"><img src="../images/lespairesdumoment/airforce1/air_force1_1.jpg" class="img-fluid" alt="Responsive image"></a>
        <a href="../images/lespairesdumoment/airforce1/airforce1max3.jpg"><img src="../images/lespairesdumoment/airforce1/air_force1_2.jpg" class="img-fluid" alt="Responsive image"></a>
        <a href="../images/lespairesdumoment/airforce1/airforce1max1.jpg"><img src="../images/lespairesdumoment/airforce1/air_force1_3.jpg" class="img-fluid" alt="Responsive image"></a>
    </div>
    
<!-- formulaire commentaires -->

<?php $info = "air_force1"; ?>

<h4 class="espacecom">Espace Commentaires</h4>

  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Laisse un commentaire ! 
  </a>

  <?php include("../formulaireCommentaire.php"); ?>

     <?php include("../commentaires.php"); ?>
     
    </body>
</html>
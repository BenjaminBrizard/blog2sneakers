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
Voir les autres articles
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item" href="article_air_force1.php">Air Force 1 Low Black Tie Dye</a>
<a class="dropdown-item" href="article_air_max90.php">Air max 90 Viotech</a>
<a class="dropdown-item" href="article_parra">Parra Dunk</a>
</div>
      </div>
     
<!--     article  -->
     
     <h2>Air max 1 Shematic</h2>
     
        <p>Le modèle créé par Tinker Hatfield a connu de nombreuses déclinaisons depuis plus de 30 ans. Cette fois, la silhouette opte pour un upper en cuir blanc agrémenté de plusieurs inscriptions techniques noires comme "Swoosh out", "Suede 1.2mm", ou bien "Schematic Not For Resale" à l'intérieur de la paire, rappelant les designs Off-White de Virgil Abloh<br/>On retrouve également la signature du designer inscrit au talon.</p>
 
      
  <!--     images  -->

     <div class="photobasket">
        <a href="../images/lespairesdumoment/airmaxshematic/airmaxshematicmax1.jpg"><img src="../images/lespairesdumoment/airmaxshematic/air_max_shematic_1.jpg" class="img-fluid" alt="Responsive image"></a>
        <a href="../images/lespairesdumoment/airmaxshematic/airmaxshematicmax2.jpg"><img src="../images/lespairesdumoment/airmaxshematic/air_max_shematic_2.jpg" class="img-fluid" alt="Responsive image"></a>
        <a href="../images/lespairesdumoment/airmaxshematic/airmaxshematicmax3.jpg"><img src="../images/lespairesdumoment/airmaxshematic/air_max_shematic_3.jpg" class="img-fluid" alt="Responsive image"></a>
      </div>
      <hr>
<!--     formulaire  -->
<h4 class="espacecom">Espace Commentaires</h4>
<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Laisse un commentaire ! 
  </a>
  <div class="collapse" id="collapseExample">
    <div class="card card-body"> 

    <div class="row">
        <div class="col-sm-12"> 
            <div class="formulaire">
                <form method="POST" class="form" action="article_air_max_shematic.php">
                    <div class="form-group">
                        <label for="name">Votre pseudo</label>
                            <input type="text" name="pseudo" required placeholder="Entrer votre pseudo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="commentaire">Votre message</label>
                        <textarea class="form-control" name="commentaire" required></textarea>
                    </div>
                      <input name="code_produit" type="hidden" value="air_max_shematic">  
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
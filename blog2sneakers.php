
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
    
 <body>
 <?php session_start(); ?>
 
        <div>
            
            <!--navbar-->
            
<?php include("commun/navbar.php"); ?>
            
          
            <h1 class="d-block my-2 py-2 titre">DOSE2SNEAKERS</h1>
            
            <?php
            //var_dump($_SESSION);
            if( !empty ($_SESSION['pseudo'])){ 
              $msg = "Salut " . $_SESSION['pseudo'] . " bienvenue !"; 
            } else { 
              $msg = 'Salut à tous, je vais vous présenter ici un aperçu de ma collection personnelle de sneakers que j\'ai commencé il y à quelques années !';
            }
            ?>
            <p class="msgdaccueil"><?php echo $msg ?></p>
              

     <div class="container">
            

  <div id="monCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#monCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#monCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item dark active">
        <img src="images/airmax1shematic.jpg" class="d-block w-100" alt="airmax1">
        <div class="carousel-caption d-none d-md-block">
          <h5> <a href="sortiesdumoment.php">Les sorties du moment</a></h5>
          
        </div>
      </div>
      <div class="carousel-item light">
        <img src="images/tailwind4.jpg" class="d-block w-100" alt="tailwind4">
        <div class="carousel-caption d-none d-md-block">
          <h5><a href="collectionperso.php">Ma collection perso</a></h5>
          
        </div>
      </div>
      </div>
    <a class="carousel-control-prev" href="#monCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#monCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    </div>
   
 </body>
</html>










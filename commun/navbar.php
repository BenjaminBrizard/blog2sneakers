<?php include("variables.php"); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!--mon logo du site-->
<a class="navbar-brand" href="<?php echo PROJECT_ROOT . 'blog2sneakers.php'?>">
        <img src="<?php echo IMAGES . 'tennis.jpg'?>" width="100" height="60" class="d-inline-block align-top"alt="logo"> <div class="titre">DOSE2SNEAKERS</div>
    </a>
    <!--fin logo-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <!--ma collection-->
      <a class="nav-link" href="<?php echo PROJECT_ROOT . 'collectionperso.php'?>">Ma collection perso</a>
    </li>
      <li class="nav-item">
          <!--les sorties du moment-->
      <a class="nav-link" href="<?php echo PROJECT_ROOT . 'sortiesdumoment.php'?>">Les sorties du moment</a>
        </li>
        <li class="nav-item">
            <!--profile-->
            <a class="nav-link" href="<?php echo PROJECT_ROOT . 'contact.php'?>">Profile</a>
        </li>

        <?php if (isset($_SESSION['pseudo'])): ?>

      <li class="nav-item dropdown pb-0 bg-primary rounded">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?= $msg = "Bienvenue " . $_SESSION['pseudo'] . "!"; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="deconnection.php">Me deconnecter</a>
      </li>

      <?php endif; ?>
    </ul>
  </div>
</nav>
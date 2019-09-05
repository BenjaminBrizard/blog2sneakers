<!--navbar-->

<?php 
// var_dump($_SERVER['DOCUMENT_ROOT']);
// var_dump($_SERVER['HTTP_HOST']);
// var_dump($_SERVER['SERVER_NAME']);
// var_dump(__DIR__);
?>
<?php include("variables.php"); ?>

<nav class="navbar navbar-light bg-light pb-0">
    <a class="navbar-brand" href="<?php echo PROJECT_ROOT . 'blog2sneakers.php'?>">
        <img src="<?php echo IMAGES . 'tennis.jpg'?>" width="100" height="60" class="d-inline-block align-top"alt="logo"> <div class="titre">DOSE2SNEAKERS</div>
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo PROJECT_ROOT . 'collectionperso.php'?>">Ma collection perso</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo PROJECT_ROOT . 'sortiesdumoment.php'?>">Les sorties du moment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo PROJECT_ROOT . 'contact.php'?>">Profile</a>
        </li>
        
            <?php if (isset($_SESSION['pseudo'])): ?>
    <li class="nav-item">
        <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?= $msg = "Bienvenue " . $_SESSION['pseudo'] . "!"; ?>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item px-1 py-0" type="button"><a class="dropdown-item" href="deconnection.php">Me deconnecter</a></button>
        </div>
        </div>
</li>
        <?php endif; ?>

         
    </ul>
</nav>
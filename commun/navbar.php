<!--navbar-->

<?php 
// var_dump($_SERVER['DOCUMENT_ROOT']);
// var_dump($_SERVER['HTTP_HOST']);
// var_dump($_SERVER['SERVER_NAME']);
// var_dump(__DIR__);
?>
<?php include("variables.php"); ?>

<nav class="navbar navbar-light bg-light">
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
            <a class="nav-link" href="<?php echo PROJECT_ROOT . 'contact.php'?>">Contact</a>
        </li>
    </ul>
</nav>
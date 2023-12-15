<?php
session_start();
$page = 'Accueil';

require_once 'controllers/indexController.php';
require_once 'views/parts/header.php';
?>

<h1>Le meilleur site de RSS au monde</h1>

<div class="container">
    <!-- CATEGORIE ACTU -->
    <div class="sidebar-left">
        <h2>ACTUALITÉS</h2>
        <?php
        if (isset($_SESSION['feeds']) == 'actu') {
            echo displayActu();
        } else if (isset($_SESSION['feeds']) == 'gaming') {
            echo displayGaming();
        } else if (isset($_SESSION['feeds']) == 'eco') {
            echo displayEco();
        } else if (isset($_SESSION['feeds']) == 'pol') {
            echo displayPol();
        } else if (isset($_SESSION['feeds']) == 'sci') {
            echo displaySci();
        } else{
            echo displayGaming();
        }
        ?>

    </div>
    <div class="sidebar-center">
        <h2>JEUX VIDÉOS</h2>
        <?php
        echo displayGaming();
        /* if (isset($_SESSION['feeds']) == 'actu') {
            echo displayActu();
        } elseif (isset($_SESSION['feeds']) == 'gaming') {
            echo displayGaming();
        } elseif (isset($_SESSION['feeds']) == 'eco') {
            echo displayEco();
        } elseif (isset($_SESSION['feeds']) == 'pol') {
            echo displayPol();
        } elseif (isset($_SESSION['feeds']) == 'sci') {
            echo displaySci();
        } */
        ?>

    </div>
    <div class="sidebar-right">
        <h2>FINANCES</h2>
        <?php
        echo displayEco();
        /* if (isset($_SESSION['feeds']) == 'actu') {
            echo displayActu();
        } elseif (isset($_SESSION['feeds']) == 'gaming') {
            echo displayGaming();
        } elseif (isset($_SESSION['feeds']) == 'eco') {
            echo displayEco();
        } elseif (isset($_SESSION['feeds']) == 'pol') {
            echo displayPol();
        } elseif (isset($_SESSION['feeds']) == 'sci') {
            echo displaySci();
        } */
        ?> 

    </div>
</div>

<?php
require_once 'views/parts/footer.php';
?>
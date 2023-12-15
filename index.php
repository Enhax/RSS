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
         if(isset($_GET['feed[]']) && $_GET['feed[]'] == 'sci') {
            echo displaySci();
        }; ?>

    </div>
    <div class="sidebar-center">
        <h2>JEUX VIDÉOS</h2>
        <?= displayGaming(); ?>

    </div>
    <div class="sidebar-right">
        <h2>FINANCES</h2>
        <?= displayEco() ?>

    </div>
</div>

<?php
require_once 'views/parts/footer.php';
?>
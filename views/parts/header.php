<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title><?= $page ?></title>
    <script src="https://kit.fontawesome.com/f0d3df2a54.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div class="nav-left">
            <a href="http://rss/" id="logo">RSS News</a>
        </div>
        <div class="nav-center">
            <i class="fa-solid fa-xmark" id="closeBtn"></i>
            <ul>
                <li><a href="http://rss/">Accueil</a></li>
                <?php
                if (isset($_GET['actu'])) { ?>
                    <li><a href="#"><?= $_GET['actu'] ?></a></li>
                <?php } else if (isset($_GET['gaming'])) { ?>
                    <li><a href="#"><?= $_GET['gaming'] ?></a></li>
                <?php } else if (isset($_GET['eco'])) { ?>
                    <li><a href="#"><?= $_GET['eco'] ?></a></li>
                <?php } else if (isset($_GET['sports'])) { ?>
                    <li><a href="#"><?= $_GET['sports'] ?></a></li>
                <?php } else if (isset($_GET['tech'])) { ?>
                    <li><a href="#"><?= $_GET['tech'] ?></a></li>
                <?php } else{ ?>
                        <li><a href="#">ACTUALITES</a></li>
                  <?php }?>
                  <?php
                if (isset($_GET['actu'])) { ?>
                    <li><a href="#"><?= $_GET['actu'] ?></a></li>
                <?php } else if (isset($_GET['gaming'])) { ?>
                    <li><a href="#"><?= $_GET['gaming'] ?></a></li>
                <?php } else if (isset($_GET['eco'])) { ?>
                    <li><a href="#"><?= $_GET['eco'] ?></a></li>
                <?php } else if (isset($_GET['sports'])) { ?>
                    <li><a href="#"><?= $_GET['sports'] ?></a></li>
                <?php } else if (isset($_GET['tech'])) { ?>
                    <li><a href="#"><?= $_GET['tech'] ?></a></li>
                <?php } else{ ?>
                        <li><a href="#">JEUX VIDEOS</a></li>
                  <?php }?>
                  <?php
                if (isset($_GET['actu'])) { ?>
                    <li><a href="#"><?= $_GET['actu'] ?></a></li>
                <?php } else if (isset($_GET['gaming'])) { ?>
                    <li><a href="#"><?= $_GET['gaming'] ?></a></li>
                <?php } else if (isset($_GET['eco'])) { ?>
                    <li><a href="#"><?= $_GET['eco'] ?></a></li>
                <?php } else if (isset($_GET['sports'])) { ?>
                    <li><a href="#"><?= $_GET['sports'] ?></a></li>
                <?php } else if (isset($_GET['tech'])) { ?>
                    <li><a href="#"><?= $_GET['tech'] ?></a></li>
                <?php } else{ ?>
                        <li><a href="#">ECONOMIES</a></li>
                  <?php }?>
                
            </ul>
        </div>
        <div class="nav-right">
            <a href="http://rss/preferences"><i class="fa-solid fa-gear"></i><span>Préférences</span></a>
            <i class="fa-solid fa-bars" id="openBtn"></i>
        </div>
        </div>
    </nav>
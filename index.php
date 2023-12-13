<?php
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
        $url = "https://www.01net.com/actualites/feed";
        $rss = simplexml_load_file($url);

        for ($i = 0; $i < 12; $i++) {
            $item = $rss->channel->item[$i];
            $datetime = date_create($item->pubDate);
            $date = date_format($datetime, 'd M Y, H\hi');
            $desc = $item->description;
            $img = $item->enclosure['url'];
        ?>
            <div class="card">
                <ul>
                    <li>
                        <a href="<?php echo $item->link ?>"><?php echo $item->title ?></a>
                        <p><?php echo $desc ?></p>
                        <p><?php echo $date ?></p>
                    </li>
                </ul>
            </div>
        <?php
        }
        ?>

    </div>
    <div class="sidebar-center">
        <h2>JEUX VIDÉOS</h2>
        <?php
        $url = "https://www.jeuxactu.com/rss/mobile.rss";
        $rss = simplexml_load_file($url);

        for ($i = 0; $i < 12; $i++) {
            $item = $rss->channel->item[$i];
            $datetime = date_create($item->pubDate);
            $date = date_format($datetime, 'd M Y, H\hi');
            $desc = $item->description;
            $img = $item->enclosure['url'];
        ?>
            <div class="card">
                <ul>
                    <li>
                        <a href="<?php echo $item->link ?>"><?php echo $item->title ?></a>
                        <img src="<?php echo $img ?>">
                        <p><?php echo $desc ?></p>
                        <p><?php echo $date ?></p>
                    </li>
                </ul>
            </div>
        <?php
        }
        ?>

    </div>
    <div class="sidebar-right">
        <h2>FINANCES</h2>
        <?php
        $url = "https://www.lemonde.fr/economie/rss_full.xml";
        $rss = simplexml_load_file($url);

        for ($i = 0; $i < 12; $i++) {
            $item = $rss->channel->item[$i];
            $datetime = date_create($item->pubDate);
            $date = date_format($datetime, 'd M Y, H\hi');
            $desc = $item->description;
            $img = $item->enclosure['url'];
        ?>
            <div class="card">
                <ul>
                    <li>
                        <a href="<?php echo $item->link ?>"><?php echo $item->title ?></a>
                        <img src="<?php echo $img ?>">
                        <p><?php echo $desc ?></p>
                        <p><?php echo $date ?></p>
                    </li>
                </ul>
            </div>
        <?php
        }
        ?>

    </div>
</div>

<?php
require_once 'views/parts/footer.php';
?>
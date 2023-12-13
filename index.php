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
$url = "https://www.01net.com/actualites/feed/";
$rss = simplexml_load_file($url);

for ($i = 0; $i < 12; $i++) {
    $item = $rss->channel->item[$i];
    $datetime = date_create($item->pubDate);
    $date = date_format($datetime, 'd M Y, H\hi');
    $desc = $item->description;
    $img = $item->enclosure['url'];
?>

    <ul>
        <li>
            <img src="<?php echo $img ?>">
            <a href="<?php echo $item->link ?>"><?php echo $item->title ?></a>
            <p><?php echo $desc ?></p>
            <p><?php echo $date ?></p>
        </li>
    </ul>

<?php
}
?>

    </div>
    <div class="sidebar-center">

        <?php
        $rss = simplexml_load_file("https://www.jeuxactu.com/rss/mobile.rss");

        echo '<h4>' . $rss->channel->title . '</h4>';

        foreach ($rss->channel->item as $item) {
            echo '<h4><a href="' . $item->link . '">' . $item->title . "</a></h4>";
            echo "<p>" . $item->title . "</p>";
            echo "<p>" . $item->description . "</p>";
        }
        ?>

    </div>
    <div class="sidebar-right">
        <?php
        $rss = simplexml_load_file("https://rmcsport.bfmtv.com/rss/football/");

        echo '<h4>' . $rss->channel->title . '</h4>';

        foreach ($rss->channel->item as $item) {
            echo '<h4><a href="' . $item->link . '">' . $item->title . "</a></h4>";
            echo "<p>" . $item->title . "</p>";
            echo "<p>" . $item->description . "</p>";
        }
        ?>
    </div>
</div>

<?php
require_once 'views/parts/footer.php';
?>
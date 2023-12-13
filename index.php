<?php
$page = 'Accueil';
require_once 'controllers/indexController.php';
require_once 'views/parts/header.php';
?>


<div class="container">
    <div class="sidebar-left">
    <?php
$rss = simplexml_load_file("https://www.01net.com/actualites/feed/");

echo '<h4>'. $rss->channel->title . '</h4>';

   foreach ($rss->channel->item as $item) {
    echo '<h4><a href="'. $item->link .'">' . $item->title . "</a></h4>";
    echo "<p>" . $item->title . "</p>";
    echo "<p>" . $item->description . "</p>";
 }
?>
    </div>
    <div class="sidebar-center">

    </div>
    <div class="sidebar-right">

    </div>
</div>

<?php
require_once 'views/parts/footer.php';
?>
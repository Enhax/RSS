<?php

/* $urls =[
    'actu' => "https://www.01net.com/actualites/feed",
    'eco' =>  "https://www.lemonde.fr/economie/rss_full.xml",
    'gaming' => "https://www.jeuxactu.com/rss/mobile.rss",
    'pol' => "https://www.lemonde.fr/politique/rss_full.xml",
    'sci' => "https://www.lemonde.fr/espace/rss_full.xml"
]; */

function displayActu(){
        $url = "https://www.01net.com/actualites/feed";
        $rss = simplexml_load_file($url);
    
        for ($i = 0; $i < $_SESSION['pref']; $i++) {
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
    } ?>

<?php

function displayGaming(){
        $url = "https://www.jeuxactu.com/rss/mobile.rss";
        $rss = simplexml_load_file($url);

        for ($i = 0; $i < $_SESSION['pref']; $i++) {
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
    } ?>
    
<?php
function displayEco(){
        $url = "https://www.lemonde.fr/videos/rss_full.xml";
        $rss = simplexml_load_file($url);

        for ($i = 0; $i < $_SESSION['pref']; $i++) {
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
                        <!-- <img src="<?php echo $img ?>"> -->                      
                        <p><?php echo $desc ?></p>
                        <p><?php echo $date ?></p>
                    </li>
                </ul>
            </div>
        <?php
        }      
    } ?>

<?php
function displayPol(){
        $url = "https://www.lemonde.fr/politique/rss_full.xml";
        $rss = simplexml_load_file($url);

        for ($i = 0; $i < $_SESSION['pref']; $i++) {
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
    }?>

<?php
function displaySci(){

        $url = "https://www.lemonde.fr/espace/rss_full.xml";
        $rss = simplexml_load_file($url);

        for ($i = 0; $i < $_SESSION['pref']; $i++) {
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
    } ?>
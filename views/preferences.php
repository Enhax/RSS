
<div class="container">
        <div class="sidebar-left">
        <form action="index.php" method="post">
        <label for="choice">préférences :</label>
        <select name="choice" id="choice">
            <?php foreach ($choice as $c) { ?>
                <option value="<?php $c ?>"><?= $c ?></option>
            <?php } ?>
        </select>
    </form>

    <div>
        <form>
            <div><input type="checkbox" name="select[]" value="actu"><label>Actualités</label></div>
            <div><input type="checkbox" name="select[]" value="jeux"><label>Jeux videos</label></div>
            <div><input type="checkbox" name="select[]" value="eco"><label>Economies</label></div>
            <div><input type="checkbox" name="select[]" value="sports"><label>Sports</label></div>
            <div><input type="checkbox" name="select[]" value="techno"><label>Technologies</label></div>
            <div><button type="submit">Sélectionner</button></div>
        </form>
    </div>


        </div>
        <div class="sidebar-center">

        </div>
        <div class="sidebar-right">

        </div>
    </div>

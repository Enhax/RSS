
<div class="container">
        <div class="sidebar-left">
        <form action="/preferences" method="GET">
        <label for="choice">préférences :</label>
        <select name="choice" id="choice">
            <option value="6">6 articles affichés</option>
            <option value="9">9 articles affichés</option>
            <option value="12" >12 articles affichés</option>
        </select>
        <div><button type="submit" name="numPref">Sélectionner</button></div>
    </form>

    <div>
    <form action="/preferences" method="GET">
            <div><input type="checkbox" name="select[]" value="actu"><label>Actualités</label></div>
            <div><input type="checkbox" name="select[]" value="jeux"><label>Jeux videos</label></div>
            <div><input type="checkbox" name="select[]" value="eco"><label>Economies</label></div>
            <div><input type="checkbox" name="select[]" value="sports"><label>Sports</label></div>
            <div><input type="checkbox" name="select[]" value="techno"><label>Technologies</label></div>
            <div><button type="submit" name="catPref">Sélectionner</button></div>
        </form>
    </div>


        </div>
        <div class="sidebar-center">

        </div>
        <div class="sidebar-right">

        </div>
    </div>

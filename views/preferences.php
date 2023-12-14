
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
            <div><input type="checkbox" name="actu" value="Actualités"><label>Actualités</label></div>
            <div><input type="checkbox" name="gaming" value="Jeux videos"><label>Jeux videos</label></div>
            <div><input type="checkbox" name="eco" value="Economies"><label>Economies</label></div>
            <div><input type="checkbox" name="sports" value="Sports"><label>Sports</label></div>
            <div><input type="checkbox" name="tech" value="Technologies"><label>Technologies</label></div>
            <div><button type="submit" name="catPref">Sélectionner</button></div>
        </form>
    </div>


        </div>
        <div class="sidebar-center">

        </div>
        <div class="sidebar-right">

        </div>
    </div>

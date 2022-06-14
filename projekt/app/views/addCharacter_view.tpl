{extends file="main.tpl"}

{block name=content}

<div class = "container">
    <section>
        <h4> Dodawanie Postaci </h4>
        <form method = "post" action = "{$conf->action_root}addCharacter">
            <div class = "row 50% uniform">
                <div class = "6u$">
                    <input type = "text" name = "name" value = "" placeholder = "Imię Postaci"/>
                </div>
                <div class = "6u$">
                    <div class = "select-wrapper">
                        <select name = "class" id = "class">
                            <option value="Brak">Klasa:</option>
                            <option value="Paladyn">Paladyn</option>
                            <option value="Wojownik">Wojownik</option>
                            <option value="Rycerz Śmierci">Rycerz Śmierci</option>
                            <option value="Łowca">Łowca</option>
                            <option value="Łowca Demonów">Łowca Demonów</option>
                            <option value="Szaman">Szaman</option>
                            <option value="Druid">Druid</option>
                            <option value="Łotrzyk">Łotrzyk</option>
                            <option value="Mnich">Mnich</option>
                            <option value="Czarnoksiężnik">Czarnoksiężnik</option>
                            <option value="Kapłan">Kapłan</option>
                            <option value="Mag">Mag</option>
                        </select>
                    </div>
                </div>
                <div class = "12u$">
                    <ul class = "actions">
                        <input type = "submit" class = "button special big" value = "Dalej"/>
                    </ul>
                </div>
            </div>
        </form>
        <div class="box alt">
            <div class="row 50% uniform">
                <div class="4u"><span class="image fit rounded"><img src="images/paladyn.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/wojownik.jpg" alt="" /></span></div>
                <div class="4u$"><span class="image fit rounded"><img src="images/deathknight.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/hunter.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/demonhunter.jpg" alt="" /></span></div>
                <div class="4u$"><span class="image fit rounded"><img src="images/szaman.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/druid.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/lotr.jpg" alt="" /></span></div>
                <div class="4u$"><span class="image fit rounded"><img src="images/monk.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/warlock.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/kaplan.jpg" alt="" /></span></div>
                <div class="4u$"><span class="image fit rounded"><img src="images/mag.jpg" alt="" /></span></div>
            </div>
        </div>
    <section>
</div>

{/block}
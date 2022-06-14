{extends file="main.tpl"}

{block name=content}

<div class = "container">
    <section>
        <h4> Edytowanie Postaci </h4>
        <form method = "post" action = "{$conf->action_root}editCharacter">
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
                        <input type = "submit" class = "button special big" value = "Edytuj"/>
                    </ul>
                </div>
            </div>
        </form>
    <section>
</div>

{/block}
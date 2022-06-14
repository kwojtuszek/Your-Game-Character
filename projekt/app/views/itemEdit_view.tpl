{extends file="main.tpl"}

{block name=content}

<div class = "container">
    <section>
        <h4> Edycja Przedmiotu </h4>
        <form method = "post" action = "{$conf->action_root}editItem">
            <div class = "row 50% uniform">
                <div class = "6u">
                    <input type = "text" name = "name" value = "" placeholder = "Nazwa Przedmiotu"/>
                </div>
                <div class = "6u$">
                    <input type = "text" name = "might" value = "" placeholder = "Potęga Przedmiotu"/>
                </div>
                <div class = "6u">
                    <div class = "select-wrapper">
                        <select name = "type" id = "type">
                            <option value="">Typ:</option>
                            <option value="5">Hełm</option>
                            <option value="4">Naramienniki</option>
                            <option value="6">Rękawice</option>
                            <option value="2">Napierśnik</option>
                            <option value="7">Spodnie</option>
                            <option value="8">Buty</option>
                            <option value="3">Broń</option>
                        </select>
                    </div>
                </div>
                <div class = "6u$">
                    <div class = "select-wrapper">
                        <select name = "material" id = "material">
                            <option value="">Materiał:</option>
                            <option value="Brak dla Broni">Brak dla Broni</option>
                            <option value="Szmata">Szmata</option>
                            <option value="Skóra">Skóra</option>
                            <option value="Metal">Metal</option>
                            <option value="Inny">Inny</option>
                        </select>
                    </div>
                </div>
                <div class = "12u$">
                    <ul class = "actions">
                        <input type = "submit" class = "button fit" value = "Edytuj"/>
                    </ul>
                </div>
            </div>
        </form>
    </section>
</div>

{$check}

{/block}
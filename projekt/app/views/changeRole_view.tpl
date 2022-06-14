{extends file="main.tpl"}

{block name=content}

<div class = "container">
    <section>
    <h4> Nadawanie Roli </h4>
    <form method = "post" action = "{$conf->action_root}changeRole">
        <div class = "row 50% uniform">
            <div class = "6u$">
                <div class = "select-wrapper">
                        <select name = "role" id = "role">
                            <option value="Brak">Rola:</option>
                            <option value="Uzytkownik">Użytkownik</option>
                            <option value="Moderator">Moderator</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                </div>
                <div class = "12u$">
                    <ul class = "actions">
                        <input type = "submit" class = "button special big" value = "Nadaj"/>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>

{/block}
{extends file="main.tpl"}

{block name=content}
    <div class = "container">
        <section>
            <h4> Rejestracja </h4>
            <form method = "post" action = "{$conf->action_root}register">
                <div class = "row 50% uniform">
                    <div class = "6u$">
                        <input type = "text" name = "login" value = "" placeholder = "Login"/>
                    </div>
                    <div class = "6u$">
                        <input type = "password" name = "pass" value = "" placeholder = "Hasło" />
                    </div>
                    <div class = "12u$">
                        <ul class = "actions">
                            <p><span class="image right"><img src="images/hollow.jpg" alt=""/> </span> <input type = "submit" class = "button special big" value = "Zarejestruj"/> </p>
                        </ul>
                    </div>
                </div>
            </form>
            <a href="{$conf->action_url}login" class="button fit">Zaloguj się</a>
        </section>
    </div>

{/block}
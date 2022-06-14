{extends file="main.tpl"}

{block name=content}

    <section id="banner">
	    <h2>Menu</h2>
		<p>Użytkownik: {$user->login} <br/> Co chciałbyś zrobić?</p>
		<ul class="actions">
		    <li><a href="{$conf->action_url}addCharacter" class="button special big">Dodaj Postać</a></li>
            <li><a href="{$conf->action_url}showItems/1" class="button special big">Zobacz Przedmioty</a></li>
            <li><a href="{$conf->action_url}showCharacters" class="button special big">Twoje Postacie</a></li>
            {if (\core\RoleUtils::inRole("Admin"))}
                <li><a href="{$conf->action_url}showUsers" class="button special big">Nadaj Role</a></li>
            {/if}
        </ul>
    </section>

{/block}
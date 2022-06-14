{extends file="main.tpl"}

{block name=content}

<div class = "container">
    <section>
        <h4> Wyszukaj po nazwie przedmiotu: </h4>
        <form id = "search" method = "post" onsubmit="ajaxPostForm('search','{$conf->action_root}showItemsPart','1'); return false;">
            <div class = "row uniform 50%">
                <div class = "6u$">
                    <input type = "text" name = "item_name" value = "{$item}" placeholder = "Wpisz Nazwe"/>
                </div>
                <div class = "12u$">
                    <ul class = "actions">
                        <input type = "submit" class = "button special" value = "Wyszukaj"/>
                    </ul>
                </div>
            </div>
        </form>
        {if (\core\RoleUtils::inRole("Admin") || \core\RoleUtils::inRole("Moderator"))}
            <a href = "{$conf->action_url}showAddItem" class="button alt fit">Dodaj</a>
        {/if}
        
        <div id = "1">
            {include file="showItemsPart_view.tpl"}
        </div>

        <section id = "one" class="wrapper style2 special">
            <ul class="actions">
                <li><a href="{$conf->action_url}showItems/{$paging->page-$paging->total}" class="button alt fit">Początek</a></li>
                <li><a href="{$conf->action_url}showItems/{$paging->page-1}" class="button alt fit"><</a></li>
                <li><a href="{$conf->action_url}showItems/{$paging->page+1}" class="button alt fit">></a></li>
                <li><a href="{$conf->action_url}showItems/{$paging->page+$paging->total}" class="button alt fit">Koniec</a></li>
            </ul>
        </section>
    </section>
</div>

{/block}
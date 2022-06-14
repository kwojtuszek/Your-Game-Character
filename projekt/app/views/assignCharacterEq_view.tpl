{extends file="main.tpl"}

{block name=content}

<div class = "container">
    <section>
        <h4> Sortuj Według: </h4>
        {if $action == "showHead"}
        <form method = "post" action = "{$conf->action_root}showHead">
        {/if}
         {if $action == "showShoulders"}
        <form method = "post" action = "{$conf->action_root}showShoulders">
        {/if}
         {if $action == "showHands"}
        <form method = "post" action = "{$conf->action_root}showHands">
        {/if}
         {if $action == "showChest"}
        <form method = "post" action = "{$conf->action_root}showChest">
        {/if}
         {if $action == "showLegs"}
        <form method = "post" action = "{$conf->action_root}showLegs">
        {/if}
         {if $action == "showFeet"}
        <form method = "post" action = "{$conf->action_root}showFeet">
        {/if}
         {if $action == "showWeapon"}
        <form method = "post" action = "{$conf->action_root}showWeapon">
        {/if}
            <div class = "row uniform 50%">
                <div class = "6u$">
                    <div class = "select-wrapper">
                        <select name = "sort" id = "sort">
                            <option value="0">Potęgi</option>
                            <option value="1">Materiału</option>
                            <option value="2">Nazwy</option>
                        </select>
                    </div>
                </div>
                <div class = "12u$">
                    <ul class = "actions">
                        <input type = "submit" class = "button special" value = "Sortuj"/>
                    </ul>
                </div>
            </div>
        </form>
        <div class = "table-wrapper">
            <table class = "alt">
                <thead>
                    <tr>
                        <th> Nazwa </th>
                        <th> Material </th>
                        <th> Potega </th>
                        <th> Zalóż </th>
                    </tr>
                </thead>
            
                <tbody>
                {foreach $records as $r}
                {strip}
                    <tr>
                        <td> {$r["Nazwa"]} </td>
                        <td> {$r["Material"]} </td>
                        <td> {$r["Potega"]} </td>
                        <td>
                            {if $action == "showHead"}
                            <a href = "{$conf->action_url}assignHead/{$r['idEkwipunek']}" class="button">Załóż</a>
                            {/if}
                            {if $action == "showShoulders"}
                            <a href = "{$conf->action_url}assignShoulders/{$r['idEkwipunek']}" class="button">Załóż</a>
                            {/if}
                            {if $action == "showHands"}
                            <a href = "{$conf->action_url}assignHands/{$r['idEkwipunek']}" class="button">Załóż</a>
                            {/if}
                            {if $action == "showChest"}
                            <a href = "{$conf->action_url}assignChest/{$r['idEkwipunek']}" class="button">Załóż</a>
                            {/if}
                            {if $action == "showLegs"}
                            <a href = "{$conf->action_url}assignLegs/{$r['idEkwipunek']}" class="button">Załóż</a>
                            {/if}
                            {if $action == "showFeet"}
                            <a href = "{$conf->action_url}assignFeet/{$r['idEkwipunek']}" class="button">Załóż</a>
                            {/if}
                            {if $action == "showWeapon"}
                            <a href = "{$conf->action_url}assignWeapon/{$r['idEkwipunek']}" class="button">Załóż</a>
                            {/if}
                        </td>
                    </tr>
                {/strip}
                {/foreach}
                </tbody>
            </table>
        </div>
    </section>
</div>

{/block}
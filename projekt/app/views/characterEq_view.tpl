{extends file="main.tpl"}

{block name=content}

<div class = "container">
    <section>
        <div class = "table-wrapper">
            <table class = "alt">
                <thead>
                    <tr>
                        <th> Imie Postaci</th>
                        <th> Nazwa Przedmiotu </th>
                        <th> Materiał </th>
                        <th> Potęga </th>
                        <th> Typ </th>
                        <th> Data Założenia </th>
                        <th> Zamiana </th>
                    </tr>
                </thead>

                <tbody>   
                {foreach $records as $r}
                {strip}
                    <tr>
                        <td> {$r["Imie_Postaci"]} </td>
                        <td> {$r["Nazwa"]} </td>
                        <td> {$r["Material"]} </td>
                        <td> {$r["Potega"]} </td>
                        <td> {$r["Typ"]} </td>
                        <td> {$r["Data_Zalozenia"]} </td>
                        <td>
                            {if ($r["Typ"] == "Helm")}
                                <a href = "{$conf->action_url}showEditHead/{$r['idZalozenia']}/{$r['idZapisane_Postacie']}" class="button small">Zamień</a>
                            {/if}
                            {if ($r["Typ"] == "Naramienniki")}
                                <a href = "{$conf->action_url}showEditShoulders/{$r['idZalozenia']}/{$r['idZapisane_Postacie']}" class="button small">Zamień</a>
                            {/if}  
                            {if ($r["Typ"] == "Rekawice")}
                                <a href = "{$conf->action_url}showEditHands/{$r['idZalozenia']}/{$r['idZapisane_Postacie']}" class="button small">Zamień</a>
                            {/if}  
                            {if ($r["Typ"] == "Napiersnik")}
                                <a href = "{$conf->action_url}showEditChest/{$r['idZalozenia']}/{$r['idZapisane_Postacie']}" class="button small">Zamień</a>
                            {/if}  
                            {if ($r["Typ"] == "Spodnie")}
                                <a href = "{$conf->action_url}showEditLegs/{$r['idZalozenia']}/{$r['idZapisane_Postacie']}" class="button small">Zamień</a>
                            {/if}  
                            {if ($r["Typ"] == "Buty")}
                                <a href = "{$conf->action_url}showEditFeet/{$r['idZalozenia']}/{$r['idZapisane_Postacie']}" class="button small">Zamień</a>
                            {/if}  
                            {if ($r["Typ"] == "Bron")}
                                <a href = "{$conf->action_url}showEditWeapon/{$r['idZalozenia']}/{$r['idZapisane_Postacie']}" class="button small">Zamień</a>
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
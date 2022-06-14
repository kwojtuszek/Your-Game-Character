{extends file="main.tpl"}

{block name=content}

<div class = "container">
    <section>
    {if (!empty($records))}
        <div class = "table-wrapper">
            <table class = "alt">
                <thead>
                    <tr>
                        <th> Imię </th>
                        <th> Klasa </th>
                        <th> Potega </th>
                        <th> </th>
                        <th> Akcje </th>
                        <th> </th>
                    </tr>
                </thead>

                <tbody>   
                {foreach $records as $r}
                {strip}
                    <tr>
                        <td> {$r["Imie_Postaci"]} </td>
                        <td> {$r["Klasa"]} </td>
                        <td> {$r["Potega"]} </td>
                        <td>
                            <a href = "{$conf->action_url}showEditCharacter/{$r['idZapisane_Postacie']}/{$r['Imie_Postaci']}" class="button small">Edytuj</a>
                        </td>
                        <td>
                            <a href = "{$conf->action_url}showCharacterEquipment/{$r['idZapisane_Postacie']}" class="button special small">Przedmioty</a>
                        </td>
                        <td>
                            <a onclick="confirmLink('{$conf->action_url}deleteCharacter/{$r['idZapisane_Postacie']}/{$r['Imie_Postaci']}','Czy na pewno usunąć Postać?')" class="button alt small">Usuń</a>
                        </td>
                    </tr>
                {/strip}
                {/foreach}
                </tbody>
            </table>
        </div>
        <div class="box alt">
            <div class="row 50% uniform">
                <div class="12u$"><span class="image fit"><img src="images/characters.jpg" alt="" /></span></div>
            </div>
        </div>
        {/if}
        {if (empty($records))}
            <h4> Nie dodałes jeszcze żadnej postaci. </h4>
            <div class="box alt">
                <div class="row 50% uniform">
                    <div class="12u$"><span class="image fit"><img src="images/404.jpg" alt="" /></span></div>
                </div>
            </div>
        {/if}
    </section>
</div>

{/block}
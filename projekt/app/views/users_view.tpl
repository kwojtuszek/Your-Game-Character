{extends file="main.tpl"}

{block name=content}

<div class = "container">
    <section>
        <div class = "table-wrapper">
            <table class = "alt">
                <thead>
                    <tr>
                        <th> Login </th>
                        <th> Rola </th>
                        <th> Data Przypisania </th>
                        <th> Przypisał </th>
                        <th> Akcja </th>
                    </tr>
                </thead>
                <tbody>   
                {foreach $records as $r}
                {strip}
                    <tr>
                        <td> {$r["Login"]} </td>
                        <td> {$r["Nazwa_Roli"]} </td>
                        <td> {$r["Data_Przypisania"]} </td>
                        <td> {$r["Przypisal"]} </td>
                        <td>
                            <a href = "{$conf->action_url}showChangeRole/{$r['idUzytkownicy']}/{$r['Login']}" class="button small">Zmień Role</a>
                        </td>
                    </tr>
                {/strip}
                {/foreach}
                </tbody>
            </table>
        </div>
        <div class="box alt">
            <div class="row 50% uniform">
                <div class="12u$"><span class="image fit"><img src="images/varian.jpg" alt="" /></span></div>
            </div>
        </div>
    </section>
</div>

{/block}
{extends file="main.tpl"}

{block name=content}

<div class = "container">
    <section>
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
                            <a href = "{$conf->action_url}assignNew/{$r['idEkwipunek']}" class="button">Załóż</a>
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
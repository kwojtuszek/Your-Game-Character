<div class = "container">
    
    <div class = "table-wrapper">
        <table class = "alt">
            <thead>
                <tr>
                    <th> Nazwa </th>
                    <th> Material </th>
                    <th> Potega </th>
                    <th> Typ </th>
                    {if (\core\RoleUtils::inRole("Admin") || \core\RoleUtils::inRole("Moderator"))}
                        <th> Akcje </th>
                        <th> </th>
                    {/if}
                </tr>
            </thead>

            <tbody>
            {foreach $records as $r}
            {strip}
                <tr>
                    <td> {$r["Nazwa"]} </td>
                    <td> {$r["Material"]} </td>
                    <td> {$r["Potega"]} </td>
                    <td> {$r["Typ"]} </td>
                    {if (\core\RoleUtils::inRole("Admin") || \core\RoleUtils::inRole("Moderator"))}
                        <td>
                            <a href = "{$conf->action_url}showEditItem/{$r['idEkwipunek']}" class="button small">Edytuj</a>
                        </td>
                    {/if}
                </tr>
            {/strip}
            {/foreach}
            </tbody>
        </table>
    </div>
</div>
{extends file = "main.tpl"}

{block name=nav}
    <li><a href="{$conf->action_url}logout">Wyloguj</a></li>
    <li><a href="{$conf->action_root}calcCompute">Kalkulator</a></li>
    <li class="active"><a href="{$conf->action_url}history">Historia</a></li>
{/block}

{block name = content}
    <h2>Historia</h2> <br/>
    <div class = "table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>BMI</th>
                    <th>Waga</th>
                    <th>Wzrost</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
            {foreach $datas as $d}
                {strip}
                    <tr>
                        <td>{round($d["BMI"],3)}</td>
                        <td>{$d["waga"]}</td>
                        <td>{$d["wzrost"]}</td>
                        <td>{$d["data"]}</td>
                    </tr>
                {/strip}
            {/foreach}
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                </tr>
            </tfoot>
        </table>
    </div>
            {include file = "messages.tpl"}
{/block}
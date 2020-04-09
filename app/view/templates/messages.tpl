
    <section class='col-6'>
        {if $msgs->isError()}
            <h4> Wystąpiły błędy: </h4>
            <o1>
                {foreach $msgs->getErrors() as $err}
                    {strip}
                        <li>{$err}</li>
                    {/strip}
                {/foreach}
            </o1>
            <br/>
        {/if}
    
	{if $msgs->isInfo()}
            <h4>Informacje: </h4>
            <ol>
                {foreach  $msgs->getInfo() as $inf}
		{strip}
			<li>{$inf}</li>
		{/strip}
		{/foreach}
            </ol>
	{/if}
    </section>
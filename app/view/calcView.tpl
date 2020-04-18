{extends file = "main.tpl"}

{block name=nav}
    <li><a href="{$conf->action_url}logout">Wyloguj</a></li>
    <li class="active"><a href="{$conf->action_root}calcCompute">Kalkulator</a></li>
    <li><a href="{$conf->action_url}history">Historia</a></li>
{/block}

{block name=content} 
    <h2>Kalkulator BMI</h2> <br/>
    <div>
    <form action="{$conf->action_root}calcCompute" method="post" >
        <fieldset>
        <div class="row gtr-uniform">
            <p>Podaj </p>
            <div class=" col-2 ">
		<input type="text" name="height" id="height" value="{$form->height}" placeholder="Wzrost" />
            </div>
            
            <div class=" col-3">
		<select name="meter" id="meter">
                    
                        {if isset($result->op)}
                            <option selected value="{$form->meter}">{$result->op}</option>
                            <option value="" disabled="true">---</option>
                        {/if}
                    
                	<option value="cm">w centymetrach</option>
			<option value="m">w metrach</option>
		</select>
            </div>
        </div>
        
        <div class="row">
            <p>Podaj</p> 
            <div class="col-2">
		<input type="text" name="weight" id="weight" value="{$form->weight}" placeholder="Wagę" />
            </div>
            <p> &emsp; w kilogramach </p>
        </div>
        <br/>
        <div class="col-12">
		<ul class="actions">
		<li><input type="submit" value="Oblicz" class="primary" /></li>
		<li><input type="reset" value="Reset" /></li>
		</ul>
        </div>
        </fieldset>
    </form>
<hr/>
<div class="row ">
    {include file='messages.tpl'}
<section class='col-6'>
{if isset($result->result)}
	<h4>Wynik: </h4>
	<p>{round($result->result,3)} &emsp; &larr; &emsp;więc 
            {if $result->result<18.5} posiadasz niedowagę </p>{/if}
            {if $result->result>=18.5 && $result->result<25} Twoja waga jest w normie </p>{/if}
            {if $result->result>=25} posiadasz nadwagę </p>{/if}
{/if}

</section>
</div>
{if isset($result->result)}
    <center>
        <img src="{$conf->app_root}/images/image1.jpg" alt="Tabela BMI" style="width:900px;height:500px;">
    </center>
{/if}

</div>

{/block}
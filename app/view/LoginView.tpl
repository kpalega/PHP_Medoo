{extends file="main.tpl"}

{block name=nav}
    <li class="active"><a href="{$conf->action_url}login">Zaloguj</a></li>
{/block}

{block name=content}
    <center>
    <h2>Logowanie</h2>
    <div class="mx-auto" style="width: 500px;">
        <form method="post" action="{$conf->action_url}login" >       
            <div class="row mx-md-n5">
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <input type="text" name="login" id="login" value="" placeholder="Login" />
                    </div>
            
                    <div class="col-6 col-12-xsmall">
                        <input type="text" name="password" id="password" value="" placeholder="Hasło" />
                    </div>
           
                    <div class="col-12">
                        <ul class="actions" style="width: 370px;">
                            <li><input type="submit" value="Zaloguj" class="primary" /></li>
                            <li><input type="reset" value="Reset" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <hr>
    {include file ='messages.tpl'}

{/block}
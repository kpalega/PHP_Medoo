<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-09 18:09:23
  from 'D:\xampp\htdocs\BMI\app\view\calcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8f48b3b19730_50950940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3245c1146f0d96d3c8da90981cb3fdd10ca516af' => 
    array (
      0 => 'D:\\xampp\\htdocs\\BMI\\app\\view\\calcView.tpl',
      1 => 1586378796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5e8f48b3b19730_50950940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3049462685e8f48b3947998_45114284', 'nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20362560865e8f48b39c7d67_72355977', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'nav'} */
class Block_3049462685e8f48b3947998_45114284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_3049462685e8f48b3947998_45114284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
    <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute">Kalkulator</a></li>
<?php
}
}
/* {/block 'nav'} */
/* {block 'content'} */
class Block_20362560865e8f48b39c7d67_72355977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20362560865e8f48b39c7d67_72355977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <h2>Kalkulator BMI</h2> <br/>
    <div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post" >
        <fieldset>
        <div class="row gtr-uniform">
            <p>Podaj </p>
            <div class=" col-2 ">
		<input type="text" name="height" id="height" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->height;?>
" placeholder="Wzrost" />
            </div>
            
            <div class=" col-3">
		<select name="meter" id="meter">
                    
                        <?php if (isset($_smarty_tpl->tpl_vars['result']->value->op)) {?>
                            <option selected value="<?php echo $_smarty_tpl->tpl_vars['form']->value->meter;?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value->op;?>
</option>
                            <option value="" disabled="true">---</option>
                        <?php }?>
                    
                	<option value="cm">w centymetrach</option>
			<option value="m">w metrach</option>
		</select>
            </div>
        </div>
        
        <div class="row">
            <p>Podaj</p> 
            <div class="col-2">
		<input type="text" name="weight" id="weight" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->weight;?>
" placeholder="Wagę" />
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
    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class='col-6'>
<?php if (isset($_smarty_tpl->tpl_vars['result']->value->result)) {?>
	<h4>Wynik: </h4>
	<p><?php echo round($_smarty_tpl->tpl_vars['result']->value->result,3);?>
 &emsp; &larr; &emsp;więc 
            <?php if ($_smarty_tpl->tpl_vars['result']->value->result < 18.5) {?> posiadasz niedowagę </p><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['result']->value->result >= 18.5 && $_smarty_tpl->tpl_vars['result']->value->result < 25) {?> Twoja waga jest w normie </p><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['result']->value->result >= 25) {?> posiadasz nadwagę </p><?php }
}?>

</section>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['result']->value->result)) {?>
    <center>
        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/images/image1.jpg" alt="Tabela BMI" style="width:900px;height:500px;">
    </center>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-27 23:05:59
  from 'D:\xampp\htdocs\BMI\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7e78c7dd67b5_57684976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '404113bc58b1e5f50c95988132d8a058e7e32e4e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\BMI\\app\\calc.tpl',
      1 => 1585344583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7e78c7dd67b5_57684976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9671837105e7e78c7dc6326_27306895', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_9671837105e7e78c7dc6326_27306895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9671837105e7e78c7dc6326_27306895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <h2>Kalkulator BMI</h2> <br/>
    <div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post" >
        <fieldset>
        <div class="row gtr-uniform">
            <p>Podaj </p>
            <div class=" col-2 ">
		<input type="text" name="height" id="height" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['height'];?>
" placeholder="Wzrost" />
            </div>
            
            <div class=" col-3">
		<select name="meter" id="meter">
                	<option value="cm">w centymetrach</option>
			<option value="m">w metrach</option>
		</select>
            </div>
        </div>
        
        <div class="row">
            <p>Podaj</p> 
            <div class="col-2">
		<input type="text" name="weight" id="weight" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['weight'];?>
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

<div class="row ">
    <section class='col-6'>
        <?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)) {?>
            <h4> Wystąpiły błędy: </h4>
            <o1>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </o1>
            <br/>
        <?php }?>
    <?php }?>
    
 <?php if (isset($_smarty_tpl->tpl_vars['infos']->value)) {?>
	<?php if (!empty($_smarty_tpl->tpl_vars['infos']->value)) {?> 
            
		<h4>Informacje: </h4>
		<ol>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>
    </section>
<section class='col-6'>
<?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
	<h4>Wynik: </h4>
	<p><?php echo round($_smarty_tpl->tpl_vars['result']->value,3);?>
 &emsp; &larr; &emsp;więc 
            <?php if ($_smarty_tpl->tpl_vars['result']->value < 18.5) {?> posiadasz niedowagę </p><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['result']->value >= 18.5 && $_smarty_tpl->tpl_vars['result']->value < 25) {?> Twoja waga jest w normie </p><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['result']->value >= 25) {?> posiadasz nadwagę </p><?php }
}?>
</section>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}

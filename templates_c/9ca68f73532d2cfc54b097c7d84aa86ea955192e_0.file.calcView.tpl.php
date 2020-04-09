<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-28 17:58:20
  from 'D:\xampp\htdocs\BMI\app\calcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7f822c5a8532_22272775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ca68f73532d2cfc54b097c7d84aa86ea955192e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\BMI\\app\\calcView.tpl',
      1 => 1585414582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7f822c5a8532_22272775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11488874385e7f822c58b4b5_36652866', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'content'} */
class Block_11488874385e7f822c58b4b5_36652866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11488874385e7f822c58b4b5_36652866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <h2>Kalkulator BMI</h2> <br/>
    <div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post" >
        <fieldset>
        <div class="row gtr-uniform">
            <p>Podaj </p>
            <div class=" col-2 ">
		<input type="text" name="height" id="height" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->height;?>
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
    <section class='col-6'>
        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
            <h4> Wystąpiły błędy: </h4>
            <o1>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </o1>
            <br/>
        <?php }?>
    
	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?> 
            
		<h4>Informacje: </h4>
		<ol>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfo(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
		1<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }?>
    </section>
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

<?php if (isset($_smarty_tpl->tpl_vars['result']->value->result)) {?>
    <center>
        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/images/image1.jpg" alt="Tabela BMI" style="width:900px;height:500px;">
    </center>
<?php }?>
</div>
</div>

<?php
}
}
/* {/block 'content'} */
}

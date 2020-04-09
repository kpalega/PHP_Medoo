<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-09 18:09:23
  from 'D:\xampp\htdocs\BMI\app\view\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8f48b3e64db5_62706237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cc3d15d1f0432a4850bcf0c9e4fb243a9929c9a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\BMI\\app\\view\\templates\\messages.tpl',
      1 => 1586378845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8f48b3e64db5_62706237 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
		<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
	<?php }?>
    </section><?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-18 19:46:32
  from 'D:\xampp\htdocs\BMI\app\view\HistoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9b3cf84d8197_91143301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b390b65d029c9a3feeb41f954b43c7c82079d50f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\BMI\\app\\view\\HistoryView.tpl',
      1 => 1587231988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5e9b3cf84d8197_91143301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9478069865e9b3cf8479700_27015933', 'nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8437965875e9b3cf8498659_82925274', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'nav'} */
class Block_9478069865e9b3cf8479700_27015933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_9478069865e9b3cf8479700_27015933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute">Kalkulator</a></li>
    <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
history">Historia</a></li>
<?php
}
}
/* {/block 'nav'} */
/* {block 'content'} */
class Block_8437965875e9b3cf8498659_82925274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8437965875e9b3cf8498659_82925274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                <tr><td><?php echo round($_smarty_tpl->tpl_vars['d']->value["BMI"],3);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["waga"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["wzrost"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["data"];?>
</td></tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                </tr>
            </tfoot>
        </table>
    </div>
            <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}

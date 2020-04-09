<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-09 18:09:26
  from 'D:\xampp\htdocs\BMI\app\view\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8f48b6635ec2_88147971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94f7e3117362db16f4ca4b2f18c68e807da8c00a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\BMI\\app\\view\\LoginView.tpl',
      1 => 1586436735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5e8f48b6635ec2_88147971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16009602325e8f48b66106b6_83815290', 'nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18040974575e8f48b6623544_24800717', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'nav'} */
class Block_16009602325e8f48b66106b6_83815290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_16009602325e8f48b66106b6_83815290',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">Zaloguj</a></li>
<?php
}
}
/* {/block 'nav'} */
/* {block 'content'} */
class Block_18040974575e8f48b6623544_24800717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18040974575e8f48b6623544_24800717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <center>
    <h2>Logowanie</h2>
    <div class="mx-auto" style="width: 500px;">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" >       
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
    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}

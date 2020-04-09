<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-09 18:09:23
  from 'D:\xampp\htdocs\BMI\app\view\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8f48b3cca586_98955140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91db73b4319fcc58c953133d609b34f4194a15ca' => 
    array (
      0 => 'D:\\xampp\\htdocs\\BMI\\app\\view\\templates\\main.tpl',
      1 => 1586378261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8f48b3cca586_98955140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl"> 

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/noscript.css" /></noscript>
    

</head>

<body controls preload="none">
    <div id="wrapper">
<!-- Header -->	
        <header id="header">
		<a class="logo">Kalkulator</a>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20532978745e8f48b3c7a9b7_87377557', 'head');
?>

        </header>  
<!-- Nav -->
	<nav id="nav">
            <section>
                <ul class="links">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10035863635e8f48b3c80ce6_75983264', 'nav');
?>

                </ul>
            </section>
        </nav>
<!-- Main -->
    <div id="main">
         <section class="post">
             <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_245910395e8f48b3c88286_80148689', 'content');
?>

         </section>
    </div>

<!-- Footer -->
        <footer id="footer">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18567145615e8f48b3c8f174_33967017', 'footer');
?>

            <section class="alt row">
                    <div class= "col-4" ><h3>Telefon</h3> <p>(+48) 123 456 789</p></div>
                    <div class= "col-4" ><h3>Email</h3> <p>k.palega@onet.pl</p></div>
                    <div class= "col-3" >
                        <center>
                        <ul class="icons alt">
			<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
			<li><a href="https://github.com/kpalega" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                        </ul>
                        </center>
                    </div>
                </section>
            
        </footer>
    
    
    <!-- Copyright -->
    <div id="copyright">
        <ul><li>&copy; Karolina Pałęga</li><li> Widok oparty na: <a href="https://html5up.net">HTML5 UP</a></li></ul>
    </div>
    
</div>
    <!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
                      
</body>
</html><?php }
/* {block 'head'} */
class Block_20532978745e8f48b3c7a9b7_87377557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_20532978745e8f48b3c7a9b7_87377557',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'nav'} */
class Block_10035863635e8f48b3c80ce6_75983264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_10035863635e8f48b3c80ce6_75983264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<li><a href="index.html">a</a></li>
		<li class="active"><a href="generic.html">b</a></li>
                <?php
}
}
/* {/block 'nav'} */
/* {block 'content'} */
class Block_245910395e8f48b3c88286_80148689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_245910395e8f48b3c88286_80148689',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_18567145615e8f48b3c8f174_33967017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18567145615e8f48b3c8f174_33967017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}

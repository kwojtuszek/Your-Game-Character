<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 11:28:22
  from 'D:\xampp\htdocs\projekt\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c5cfb6b305d1_92829567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e92dabab5c09b6a69e22bbbebe985149eee8725a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\templates\\main.tpl',
      1 => 1623576500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c5cfb6b305d1_92829567 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>"ProjektPostac"</title>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
	    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
	</head>

    <body>
        <header id = "header">
            <h1> <strong> Świat Rzemiosła Wojny </strong> </h1>
            <nav id = "nav">
                <ul>
                    <?php if ((\core\RoleUtils::inRole("Admin") || \core\RoleUtils::inRole("Moderator") || \core\RoleUtils::inRole("Uzytkownik"))) {?>
                        <li> <a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
menu"> Menu </a> </li>
                        <li> <a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout"> Wyloguj </a> </li>
                    <?php }?>
                </ul>
            </nav>
        </header>

        <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

        <section id = "main" class = "wrapper">

            <div class = "container">
            
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57003163160c5cfb6b28787_74174809', 'messages');
?>


            </div>
            
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107293578460c5cfb6b2fd99_35598234', 'content');
?>


        </section>

    <footer id = "footer">
            <div class="container">
                <ul class="icons">
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
				</ul>
                <h6> Email do administracji: kwojtuszek@o2.pl </h6> 
                <ul class="copyright">
					<li> &copy; Untitled</li>
					<li> Źródło Szablonu: <a href="http://templated.co">Templated</a></li>
					<li> Wykorzystany Szablon: <a href = "https://templated.co/spatial">Szablon</a></li> 
                </ul>
            </div>
        </footer>

    <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/skel.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
    
    </body>
</html>
<?php }
/* {block 'messages'} */
class Block_57003163160c5cfb6b28787_74174809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_57003163160c5cfb6b28787_74174809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
                    <section>
                        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                            <h4> Komunikaty: </h4>
                            <div class = "row">
                                <div class = "12u$">
                                    <ul class = "alt">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                            <li> <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
 </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                    </section>
                
                <?php
}
}
/* {/block 'messages'} */
/* {block 'content'} */
class Block_107293578460c5cfb6b2fd99_35598234 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_107293578460c5cfb6b2fd99_35598234',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}

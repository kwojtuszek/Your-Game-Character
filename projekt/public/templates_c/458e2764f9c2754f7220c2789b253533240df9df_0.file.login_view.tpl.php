<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-09 20:54:31
  from 'D:\xampp\htdocs\projekt\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c10e67555233_71643295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '458e2764f9c2754f7220c2789b253533240df9df' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\login_view.tpl',
      1 => 1623264869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c10e67555233_71643295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53034785460c10e6754fa90_58001721', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_53034785460c10e6754fa90_58001721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_53034785460c10e6754fa90_58001721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class = "container">
        <section>
            <h4> Logowanie </h4>
            <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">
                <div class = "row 50% uniform">
                    <div class = "6u$">
                        <input type = "text" name = "login" value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" placeholder = "Login"/>
                    </div>
                    <div class = "6u$">
                        <input type = "password" name = "pass" value = "" placeholder = "Hasło" />
                    </div>
                    <div class = "12u$">
                        <ul class = "actions">
                            <p><span class="image right"><img src="images/1.jpg" alt=""/> </span> <input type = "submit" class = "button special big" value = "Zaloguj"/> </p>
                        </ul>
                    </div>
                </div>
            </form>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showRegister" class="button fit">Zarejestruj się</a>
        </section>
    </div>

<?php
}
}
/* {/block 'content'} */
}

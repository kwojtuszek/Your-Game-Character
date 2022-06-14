<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-09 21:09:17
  from 'D:\xampp\htdocs\projekt\app\views\registerUser_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c111ddaba128_47408760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7f22b6541a08e87f646402aa19687b270e968b4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\registerUser_view.tpl',
      1 => 1623265755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c111ddaba128_47408760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89658031160c111ddab6135_66334587', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_89658031160c111ddab6135_66334587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_89658031160c111ddab6135_66334587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class = "container">
        <section>
            <h4> Rejestracja </h4>
            <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">
                <div class = "row 50% uniform">
                    <div class = "6u$">
                        <input type = "text" name = "login" value = "" placeholder = "Login"/>
                    </div>
                    <div class = "6u$">
                        <input type = "password" name = "pass" value = "" placeholder = "Hasło" />
                    </div>
                    <div class = "12u$">
                        <ul class = "actions">
                            <p><span class="image right"><img src="images/hollow.jpg" alt=""/> </span> <input type = "submit" class = "button special big" value = "Zarejestruj"/> </p>
                        </ul>
                    </div>
                </div>
            </form>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" class="button fit">Zaloguj się</a>
        </section>
    </div>

<?php
}
}
/* {/block 'content'} */
}

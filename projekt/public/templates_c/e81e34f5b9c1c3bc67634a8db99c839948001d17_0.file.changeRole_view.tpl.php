<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-10 11:32:41
  from 'D:\xampp\htdocs\projekt\app\views\changeRole_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c1dc39def731_84574841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e81e34f5b9c1c3bc67634a8db99c839948001d17' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\changeRole_view.tpl',
      1 => 1623317558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1dc39def731_84574841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101469525060c1dc39debf83_90327397', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_101469525060c1dc39debf83_90327397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_101469525060c1dc39debf83_90327397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "container">
    <section>
    <h4> Nadawanie Roli </h4>
    <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
changeRole">
        <div class = "row 50% uniform">
            <div class = "6u$">
                <div class = "select-wrapper">
                        <select name = "role" id = "role">
                            <option value="Brak">Rola:</option>
                            <option value="Uzytkownik">Użytkownik</option>
                            <option value="Moderator">Moderator</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                </div>
                <div class = "12u$">
                    <ul class = "actions">
                        <input type = "submit" class = "button special big" value = "Nadaj"/>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
}
}
/* {/block 'content'} */
}

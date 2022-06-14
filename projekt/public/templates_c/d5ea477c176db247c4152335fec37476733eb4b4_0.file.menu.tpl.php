<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 09:45:23
  from 'D:\xampp\htdocs\projekt\app\views\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c5b793068142_13461452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5ea477c176db247c4152335fec37476733eb4b4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\menu.tpl',
      1 => 1623570225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c5b793068142_13461452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18193726460c5b792e41ad2_88920357', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_18193726460c5b792e41ad2_88920357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18193726460c5b792e41ad2_88920357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section id="banner">
	    <h2>Menu</h2>
		<p>Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
 <br/> Co chciałbyś zrobić?</p>
		<ul class="actions">
		    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addCharacter" class="button special big">Dodaj Postać</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showItems/1" class="button special big">Zobacz Przedmioty</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showCharacters" class="button special big">Twoje Postacie</a></li>
            <?php if ((\core\RoleUtils::inRole("Admin"))) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showUsers" class="button special big">Nadaj Role</a></li>
            <?php }?>
        </ul>
    </section>

<?php
}
}
/* {/block 'content'} */
}

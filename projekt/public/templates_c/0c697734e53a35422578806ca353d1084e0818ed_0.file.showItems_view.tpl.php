<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:37:11
  from 'D:\xampp\htdocs\projekt\app\views\showItems_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c5dfd700f5c0_20880710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c697734e53a35422578806ca353d1084e0818ed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\showItems_view.tpl',
      1 => 1623580628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:showItemsPart_view.tpl' => 1,
  ),
),false)) {
function content_60c5dfd700f5c0_20880710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115880678460c5dfd7000ea9_85818158', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_115880678460c5dfd7000ea9_85818158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_115880678460c5dfd7000ea9_85818158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "container">
    <section>
        <h4> Wyszukaj po nazwie przedmiotu: </h4>
        <form id = "search" method = "post" onsubmit="ajaxPostForm('search','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showItemsPart','1'); return false;">
            <div class = "row uniform 50%">
                <div class = "6u$">
                    <input type = "text" name = "item_name" value = "<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" placeholder = "Wpisz Nazwe"/>
                </div>
                <div class = "12u$">
                    <ul class = "actions">
                        <input type = "submit" class = "button special" value = "Wyszukaj"/>
                    </ul>
                </div>
            </div>
        </form>
        <?php if ((\core\RoleUtils::inRole("Admin") || \core\RoleUtils::inRole("Moderator"))) {?>
            <a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showAddItem" class="button alt fit">Dodaj</a>
        <?php }?>
        
        <div id = "1">
            <?php $_smarty_tpl->_subTemplateRender("file:showItemsPart_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <section id = "one" class="wrapper style2 special">
            <ul class="actions">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showItems/<?php echo $_smarty_tpl->tpl_vars['paging']->value->page-$_smarty_tpl->tpl_vars['paging']->value->total;?>
" class="button alt fit">Początek</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showItems/<?php echo $_smarty_tpl->tpl_vars['paging']->value->page-1;?>
" class="button alt fit"><</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showItems/<?php echo $_smarty_tpl->tpl_vars['paging']->value->page+1;?>
" class="button alt fit">></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showItems/<?php echo $_smarty_tpl->tpl_vars['paging']->value->page+$_smarty_tpl->tpl_vars['paging']->value->total;?>
" class="button alt fit">Koniec</a></li>
            </ul>
        </section>
    </section>
</div>

<?php
}
}
/* {/block 'content'} */
}

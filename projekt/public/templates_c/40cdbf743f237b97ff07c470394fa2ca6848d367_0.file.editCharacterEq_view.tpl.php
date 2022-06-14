<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-11 10:34:47
  from 'D:\xampp\htdocs\projekt\app\views\editCharacterEq_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c32027922332_57413002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40cdbf743f237b97ff07c470394fa2ca6848d367' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\editCharacterEq_view.tpl',
      1 => 1623400485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c32027922332_57413002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6943853160c32027915a80_15313756', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_6943853160c32027915a80_15313756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6943853160c32027915a80_15313756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "container">
    <section>
        <div class = "table-wrapper">
            <table class = "alt">
                <thead>
                    <tr>
                        <th> Nazwa </th>
                        <th> Material </th>
                        <th> Potega </th>
                        <th> Zalóż </th>
                    </tr>
                </thead>
            
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                <tr><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Nazwa"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Material"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Potega"];?>
 </td><td><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignNew/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a></td></tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<?php
}
}
/* {/block 'content'} */
}

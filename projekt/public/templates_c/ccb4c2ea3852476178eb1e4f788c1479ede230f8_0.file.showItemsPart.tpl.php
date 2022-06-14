<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 11:12:01
  from 'D:\xampp\htdocs\projekt\app\views\templates\showItemsPart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c5cbe10cfbe2_89365451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccb4c2ea3852476178eb1e4f788c1479ede230f8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\templates\\showItemsPart.tpl',
      1 => 1623575484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c5cbe10cfbe2_89365451 (Smarty_Internal_Template $_smarty_tpl) {
?><div class = "table-wrapper">
    <table class = "alt">
        <thead>
            <tr>
                <th> Nazwa </th>
                <th> Material </th>
                <th> Potega </th>
                <th> Typ </th>
                <?php if ((\core\RoleUtils::inRole("Admin") || \core\RoleUtils::inRole("Moderator"))) {?>
                    <th> Akcje </th>
                    <th> </th>
                <?php }?>
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
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Typ"];?>
 </td><?php if ((\core\RoleUtils::inRole("Admin") || \core\RoleUtils::inRole("Moderator"))) {?><td><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showEditItem/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button small">Edytuj</a></td><?php }?></tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div><?php }
}

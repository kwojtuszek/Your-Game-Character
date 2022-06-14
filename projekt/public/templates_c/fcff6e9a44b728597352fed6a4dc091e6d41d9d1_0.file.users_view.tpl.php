<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-10 10:43:40
  from 'D:\xampp\htdocs\projekt\app\views\users_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c1d0bc3fc594_19252261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcff6e9a44b728597352fed6a4dc091e6d41d9d1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\users_view.tpl',
      1 => 1623314618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1d0bc3fc594_19252261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12119041060c1d0bc3f07e4_88324145', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_12119041060c1d0bc3f07e4_88324145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12119041060c1d0bc3f07e4_88324145',
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
                        <th> Login </th>
                        <th> Rola </th>
                        <th> Data Przypisania </th>
                        <th> Przypisał </th>
                        <th> Akcja </th>
                    </tr>
                </thead>
                <tbody>   
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                <tr><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Login"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Nazwa_Roli"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Data_Przypisania"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Przypisal"];?>
 </td><td><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showChangeRole/<?php echo $_smarty_tpl->tpl_vars['r']->value['idUzytkownicy'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['Login'];?>
" class="button small">Zmień Role</a></td></tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
        <div class="box alt">
            <div class="row 50% uniform">
                <div class="12u$"><span class="image fit"><img src="images/varian.jpg" alt="" /></span></div>
            </div>
        </div>
    </section>
</div>

<?php
}
}
/* {/block 'content'} */
}

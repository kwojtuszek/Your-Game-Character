<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-11 11:24:38
  from 'D:\xampp\htdocs\projekt\app\views\assignCharacterEq_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c32bd67fde25_05889244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df8735c9cdc7f2cf186fdc82318c8ec372a66f7c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\assignCharacterEq_view.tpl',
      1 => 1623402082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c32bd67fde25_05889244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170801028560c32bd67d9ea8_02994207', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_170801028560c32bd67d9ea8_02994207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_170801028560c32bd67d9ea8_02994207',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "container">
    <section>
        <h4> Sortuj Według: </h4>
        <?php if ($_smarty_tpl->tpl_vars['action']->value == "showHead") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showHead">
        <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['action']->value == "showShoulders") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showShoulders">
        <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['action']->value == "showHands") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showHands">
        <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['action']->value == "showChest") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showChest">
        <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['action']->value == "showLegs") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showLegs">
        <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['action']->value == "showFeet") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showFeet">
        <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['action']->value == "showWeapon") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showWeapon">
        <?php }?>
            <div class = "row uniform 50%">
                <div class = "6u$">
                    <div class = "select-wrapper">
                        <select name = "sort" id = "sort">
                            <option value="0">Potęgi</option>
                            <option value="1">Materiału</option>
                            <option value="2">Nazwy</option>
                        </select>
                    </div>
                </div>
                <div class = "12u$">
                    <ul class = "actions">
                        <input type = "submit" class = "button special" value = "Sortuj"/>
                    </ul>
                </div>
            </div>
        </form>
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
 </td><td><?php if ($_smarty_tpl->tpl_vars['action']->value == "showHead") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignHead/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a><?php }
if ($_smarty_tpl->tpl_vars['action']->value == "showShoulders") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignShoulders/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a><?php }
if ($_smarty_tpl->tpl_vars['action']->value == "showHands") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignHands/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a><?php }
if ($_smarty_tpl->tpl_vars['action']->value == "showChest") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignChest/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a><?php }
if ($_smarty_tpl->tpl_vars['action']->value == "showLegs") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignLegs/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a><?php }
if ($_smarty_tpl->tpl_vars['action']->value == "showFeet") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignFeet/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a><?php }
if ($_smarty_tpl->tpl_vars['action']->value == "showWeapon") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignWeapon/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a><?php }?></td></tr>
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

<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-10 14:16:25
  from 'D:\xampp\htdocs\projekt\app\views\editcharacterEq_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c20299800460_64649728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e740f317387881c7195f0a127c5cb9aee4f90da8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\editcharacterEq_view.tpl',
      1 => 1623325774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c20299800460_64649728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193128424060c202997e23d0_25271433', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_193128424060c202997e23d0_25271433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_193128424060c202997e23d0_25271433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "container">
    <section>
        <h4> Sortuj Według: </h4>
        <?php if ($_smarty_tpl->tpl_vars['action']->value == "showEditHead") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showEditHead">
        <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['action']->value == "showEditShoulders") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showEditShoulders">
        <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['action']->value == "showEditHands") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showEditHands">
        <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['action']->value == "showEditChest") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showEditChest">
        <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['action']->value == "showEditLegs") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showEditLegs">
        <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['action']->value == "showEditFeet") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showEditFeet">
        <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['action']->value == "showEditWeapon") {?>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showEditWeapon">
        <?php }?>
            <div class = "row uniform 50%">
                <div class = "6u$">
                    <div class = "select-wrapper">
                        <select name = "sort" id = "sort">
                            <option value="">Wybierz:</option>
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
 </td><td><?php if ($_smarty_tpl->tpl_vars['action']->value == "showEditHead") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignNewHead/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a><?php }
if ($_smarty_tpl->tpl_vars['action']->value == "showEditShoulders") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignNewShoulders/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a><?php }
if ($_smarty_tpl->tpl_vars['action']->value == "showEditHands") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignNewHands/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a><?php }
if ($_smarty_tpl->tpl_vars['action']->value == "showEditChest") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignNewChest/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a><?php }
if ($_smarty_tpl->tpl_vars['action']->value == "showEditLegs") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignNewLegs/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a><?php }
if ($_smarty_tpl->tpl_vars['action']->value == "showEditFeet") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignNewFeet/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
" class="button">Załóż</a><?php }
if ($_smarty_tpl->tpl_vars['action']->value == "showEditWeapon") {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
assignNewWeapon/<?php echo $_smarty_tpl->tpl_vars['r']->value['idEkwipunek'];?>
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

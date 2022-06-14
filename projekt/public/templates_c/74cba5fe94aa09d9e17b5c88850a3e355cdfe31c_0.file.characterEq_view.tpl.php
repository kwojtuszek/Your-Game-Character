<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-10 22:07:59
  from 'D:\xampp\htdocs\projekt\app\views\characterEq_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c2711f6c61f5_55306262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74cba5fe94aa09d9e17b5c88850a3e355cdfe31c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\characterEq_view.tpl',
      1 => 1623355669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c2711f6c61f5_55306262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127774992860c2711f6a45a9_84608986', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_127774992860c2711f6a45a9_84608986 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_127774992860c2711f6a45a9_84608986',
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
                        <th> Imie Postaci</th>
                        <th> Nazwa Przedmiotu </th>
                        <th> Materiał </th>
                        <th> Potęga </th>
                        <th> Typ </th>
                        <th> Data Założenia </th>
                        <th> Zamiana </th>
                    </tr>
                </thead>

                <tbody>   
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                <tr><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Imie_Postaci"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Nazwa"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Material"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Potega"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Typ"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Data_Zalozenia"];?>
 </td><td><?php if (($_smarty_tpl->tpl_vars['r']->value["Typ"] == "Helm")) {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showEditHead/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZalozenia'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZapisane_Postacie'];?>
" class="button small">Zamień</a><?php }
if (($_smarty_tpl->tpl_vars['r']->value["Typ"] == "Naramienniki")) {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showEditShoulders/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZalozenia'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZapisane_Postacie'];?>
" class="button small">Zamień</a><?php }
if (($_smarty_tpl->tpl_vars['r']->value["Typ"] == "Rekawice")) {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showEditHands/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZalozenia'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZapisane_Postacie'];?>
" class="button small">Zamień</a><?php }
if (($_smarty_tpl->tpl_vars['r']->value["Typ"] == "Napiersnik")) {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showEditChest/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZalozenia'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZapisane_Postacie'];?>
" class="button small">Zamień</a><?php }
if (($_smarty_tpl->tpl_vars['r']->value["Typ"] == "Spodnie")) {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showEditLegs/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZalozenia'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZapisane_Postacie'];?>
" class="button small">Zamień</a><?php }
if (($_smarty_tpl->tpl_vars['r']->value["Typ"] == "Buty")) {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showEditFeet/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZalozenia'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZapisane_Postacie'];?>
" class="button small">Zamień</a><?php }
if (($_smarty_tpl->tpl_vars['r']->value["Typ"] == "Bron")) {?><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showEditWeapon/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZalozenia'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZapisane_Postacie'];?>
" class="button small">Zamień</a><?php }?></td></tr>
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

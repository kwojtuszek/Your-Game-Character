<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-14 10:16:24
  from 'D:\xampp\htdocs\projekt\app\views\characters_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c71058c38300_30117800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95b37082c5f353124eb6b96092155f02b834c314' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\characters_view.tpl',
      1 => 1623580736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c71058c38300_30117800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182487085460c7105899fb35_14627778', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_182487085460c7105899fb35_14627778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_182487085460c7105899fb35_14627778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "container">
    <section>
    <?php if ((!empty($_smarty_tpl->tpl_vars['records']->value))) {?>
        <div class = "table-wrapper">
            <table class = "alt">
                <thead>
                    <tr>
                        <th> Imię </th>
                        <th> Klasa </th>
                        <th> Potega </th>
                        <th> </th>
                        <th> Akcje </th>
                        <th> </th>
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
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Klasa"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["Potega"];?>
 </td><td><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showEditCharacter/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZapisane_Postacie'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['Imie_Postaci'];?>
" class="button small">Edytuj</a></td><td><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showCharacterEquipment/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZapisane_Postacie'];?>
" class="button special small">Przedmioty</a></td><td><a onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
deleteCharacter/<?php echo $_smarty_tpl->tpl_vars['r']->value['idZapisane_Postacie'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['Imie_Postaci'];?>
','Czy na pewno usunąć Postać?')" class="button alt small">Usuń</a></td></tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
        <div class="box alt">
            <div class="row 50% uniform">
                <div class="12u$"><span class="image fit"><img src="images/characters.jpg" alt="" /></span></div>
            </div>
        </div>
        <?php }?>
        <?php if ((empty($_smarty_tpl->tpl_vars['records']->value))) {?>
            <h4> Nie dodałes jeszcze żadnej postaci. </h4>
            <div class="box alt">
                <div class="row 50% uniform">
                    <div class="12u$"><span class="image fit"><img src="images/404.jpg" alt="" /></span></div>
                </div>
            </div>
        <?php }?>
    </section>
</div>

<?php
}
}
/* {/block 'content'} */
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-09 14:54:17
  from 'D:\xampp\htdocs\projekt\app\views\changeCharacter_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c0b9f91088f0_45013181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba03a03b6a374bd432cdc259fe4811b2c1bcef83' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\changeCharacter_view.tpl',
      1 => 1623242351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c0b9f91088f0_45013181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10214280960c0b9f9105555_20077731', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_10214280960c0b9f9105555_20077731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10214280960c0b9f9105555_20077731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "container">
    <section>
        <h4> Edytowanie Postaci </h4>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
editCharacter">
            <div class = "row 50% uniform">
                <div class = "6u$">
                    <input type = "text" name = "name" value = "" placeholder = "Imię Postaci"/>
                </div>
                <div class = "6u$">
                    <div class = "select-wrapper">
                        <select name = "class" id = "class">
                            <option value="Brak">Klasa:</option>
                            <option value="Paladyn">Paladyn</option>
                            <option value="Wojownik">Wojownik</option>
                            <option value="Rycerz Śmierci">Rycerz Śmierci</option>
                            <option value="Łowca">Łowca</option>
                            <option value="Łowca Demonów">Łowca Demonów</option>
                            <option value="Szaman">Szaman</option>
                            <option value="Druid">Druid</option>
                            <option value="Łotrzyk">Łotrzyk</option>
                            <option value="Mnich">Mnich</option>
                            <option value="Czarnoksiężnik">Czarnoksiężnik</option>
                            <option value="Kapłan">Kapłan</option>
                            <option value="Mag">Mag</option>
                        </select>
                    </div>
                </div>
                <div class = "12u$">
                    <ul class = "actions">
                        <input type = "submit" class = "button special big" value = "Edytuj"/>
                    </ul>
                </div>
            </div>
        </form>
    <section>
</div>

<?php
}
}
/* {/block 'content'} */
}

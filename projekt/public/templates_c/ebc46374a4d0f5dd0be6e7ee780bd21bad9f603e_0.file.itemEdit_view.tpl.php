<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-11 18:05:41
  from 'D:\xampp\htdocs\projekt\app\views\itemEdit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c389d5968004_44180969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebc46374a4d0f5dd0be6e7ee780bd21bad9f603e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\itemEdit_view.tpl',
      1 => 1623427538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c389d5968004_44180969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142091367160c389d5963ec7_30646860', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_142091367160c389d5963ec7_30646860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_142091367160c389d5963ec7_30646860',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "container">
    <section>
        <h4> Edycja Przedmiotu </h4>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
editItem">
            <div class = "row 50% uniform">
                <div class = "6u">
                    <input type = "text" name = "name" value = "" placeholder = "Nazwa Przedmiotu"/>
                </div>
                <div class = "6u$">
                    <input type = "text" name = "might" value = "" placeholder = "Potęga Przedmiotu"/>
                </div>
                <div class = "6u">
                    <div class = "select-wrapper">
                        <select name = "type" id = "type">
                            <option value="">Typ:</option>
                            <option value="5">Hełm</option>
                            <option value="4">Naramienniki</option>
                            <option value="6">Rękawice</option>
                            <option value="2">Napierśnik</option>
                            <option value="7">Spodnie</option>
                            <option value="8">Buty</option>
                            <option value="3">Broń</option>
                        </select>
                    </div>
                </div>
                <div class = "6u$">
                    <div class = "select-wrapper">
                        <select name = "material" id = "material">
                            <option value="">Materiał:</option>
                            <option value="Brak dla Broni">Brak dla Broni</option>
                            <option value="Szmata">Szmata</option>
                            <option value="Skóra">Skóra</option>
                            <option value="Metal">Metal</option>
                            <option value="Inny">Inny</option>
                        </select>
                    </div>
                </div>
                <div class = "12u$">
                    <ul class = "actions">
                        <input type = "submit" class = "button fit" value = "Edytuj"/>
                    </ul>
                </div>
            </div>
        </form>
    </section>
</div>

<?php echo $_smarty_tpl->tpl_vars['check']->value;?>


<?php
}
}
/* {/block 'content'} */
}

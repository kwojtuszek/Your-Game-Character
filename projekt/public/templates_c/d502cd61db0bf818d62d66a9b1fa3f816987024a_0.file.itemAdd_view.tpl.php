<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-11 16:04:06
  from 'D:\xampp\htdocs\projekt\app\views\itemAdd_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c36d5650d819_22056970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd502cd61db0bf818d62d66a9b1fa3f816987024a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\itemAdd_view.tpl',
      1 => 1623420244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c36d5650d819_22056970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169762658360c36d5650a024_90274862', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_169762658360c36d5650a024_90274862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_169762658360c36d5650a024_90274862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "container">
    <section>
        <h4> Dodawanie Przedmiotu </h4>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addItem">
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
                        <input type = "submit" class = "button fit" value = "Dodaj"/>
                    </ul>
                </div>
            </div>
        </form>
        <div class="box alt">
            <div class="row 50% uniform">
                <div class="12u$"><span class="image fit"><img src="images/smith.jpg" alt="" /></span></div>
            </div>
        </div>
    </section>
</div>

<?php
}
}
/* {/block 'content'} */
}

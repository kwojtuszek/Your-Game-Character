<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-09 15:08:00
  from 'D:\xampp\htdocs\projekt\app\views\addCharacter_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c0bd30ada095_79372597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd678fa1f284e26de6b2120501e20874f73370069' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\addCharacter_view.tpl',
      1 => 1623237146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c0bd30ada095_79372597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132323415060c0bd30ad66c6_02229208', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_132323415060c0bd30ad66c6_02229208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_132323415060c0bd30ad66c6_02229208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "container">
    <section>
        <h4> Dodawanie Postaci </h4>
        <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addCharacter">
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
                        <input type = "submit" class = "button special big" value = "Dalej"/>
                    </ul>
                </div>
            </div>
        </form>
        <div class="box alt">
            <div class="row 50% uniform">
                <div class="4u"><span class="image fit rounded"><img src="images/paladyn.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/wojownik.jpg" alt="" /></span></div>
                <div class="4u$"><span class="image fit rounded"><img src="images/deathknight.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/hunter.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/demonhunter.jpg" alt="" /></span></div>
                <div class="4u$"><span class="image fit rounded"><img src="images/szaman.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/druid.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/lotr.jpg" alt="" /></span></div>
                <div class="4u$"><span class="image fit rounded"><img src="images/monk.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/warlock.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit rounded"><img src="images/kaplan.jpg" alt="" /></span></div>
                <div class="4u$"><span class="image fit rounded"><img src="images/mag.jpg" alt="" /></span></div>
            </div>
        </div>
    <section>
</div>

<?php
}
}
/* {/block 'content'} */
}

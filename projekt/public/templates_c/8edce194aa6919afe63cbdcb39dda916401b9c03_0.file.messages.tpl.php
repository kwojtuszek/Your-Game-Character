<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-28 13:57:15
  from 'D:\xampp\htdocs\projekt\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b0da9b98fee8_95794764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8edce194aa6919afe63cbdcb39dda916401b9c03' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\templates\\messages.tpl',
      1 => 1622203030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0da9b98fee8_95794764 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
        <h4> Komunikaty: </h4>
        <div class = "row">
            <div class = "12u$">
                <ul class = "alt">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li> <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
 </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    <?php }?>
</section>
                <?php }
}

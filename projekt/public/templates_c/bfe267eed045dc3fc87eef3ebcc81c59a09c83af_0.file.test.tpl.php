<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-10 21:52:02
  from 'D:\xampp\htdocs\projekt\app\views\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c26d621b49d3_27452662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfe267eed045dc3fc87eef3ebcc81c59a09c83af' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\test.tpl',
      1 => 1623354719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c26d621b49d3_27452662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19784645960c26d621b1608_72987358', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_19784645960c26d621b1608_72987358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19784645960c26d621b1608_72987358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['test']->value;?>


<?php
}
}
/* {/block 'content'} */
}

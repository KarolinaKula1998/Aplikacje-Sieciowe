<?php
/* Smarty version 3.1.30, created on 2025-01-05 10:25:29
  from "C:\xampp\htdocs\hairmania\app\views\ResultView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_677a5009c55812_60868812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '923f3d92ea0a00b02ace8c6f1888bbfbcf0e6796' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hairmania\\app\\views\\ResultView.tpl',
      1 => 1736069126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_677a5009c55812_60868812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_427133616677a5009c55258_03467916', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_427133616677a5009c55258_03467916 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h4>Gratulujemy!</h4>
    <p>Twoje włosy są:</p>
    <p><?php echo $_smarty_tpl->tpl_vars['result']->value['porosity'];?>
</p>
<?php
}
}
/* {/block 'top'} */
}

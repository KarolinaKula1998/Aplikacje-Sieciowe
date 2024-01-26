<?php
/* Smarty version 3.1.30, created on 2024-01-25 23:33:15
  from "C:\Users\karol\OneDrive\Pulpit\Aplikacje Sieciowe\htdocs\php_07_routing\app\views\templates\messages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65b2e1ab0f4da6_01159701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7b79c76a578a6437d9d858a9f8bd7c535a50923' => 
    array (
      0 => 'C:\\Users\\karol\\OneDrive\\Pulpit\\Aplikacje Sieciowe\\htdocs\\php_07_routing\\app\\views\\templates\\messages.tpl',
      1 => 1706221661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b2e1ab0f4da6_01159701 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
<div class="messages error">
	<ol>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
<div class="messages info bottom-margin">
	<ol>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
</div>
<?php }
}
}

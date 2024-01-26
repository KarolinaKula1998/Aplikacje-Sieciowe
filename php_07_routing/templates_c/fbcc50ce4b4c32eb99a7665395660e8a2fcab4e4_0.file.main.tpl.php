<?php
/* Smarty version 3.1.30, created on 2024-01-25 23:33:14
  from "C:\Users\karol\OneDrive\Pulpit\Aplikacje Sieciowe\htdocs\php_07_routing\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65b2e1aaef9fe5_40005891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbcc50ce4b4c32eb99a7665395660e8a2fcab4e4' => 
    array (
      0 => 'C:\\Users\\karol\\OneDrive\\Pulpit\\Aplikacje Sieciowe\\htdocs\\php_07_routing\\app\\views\\templates\\main.tpl',
      1 => 1706221661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b2e1aaef9fe5_40005891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "brak tytułu" : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" />
</head>
<body>
	<div style="margin: 1em;">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175343879065b2e1aaef9967_25947377', 'content');
?>

	</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_175343879065b2e1aaef9967_25947377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}

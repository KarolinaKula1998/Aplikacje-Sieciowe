<?php
/* Smarty version 3.1.30, created on 2024-01-24 22:20:52
  from "C:\Users\karol\OneDrive\Pulpit\Aplikacje Sieciowe\htdocs\php_06_kontroler_glowny\app\calc\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65b17f3408c636_07350700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40e2e8cdab2171a6d9ec8b44b2a70ce37c4c3a4f' => 
    array (
      0 => 'C:\\Users\\karol\\OneDrive\\Pulpit\\Aplikacje Sieciowe\\htdocs\\php_06_kontroler_glowny\\app\\calc\\CalcView.html',
      1 => 1706131238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b17f3408c636_07350700 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170486621265b17f3405df93_46338794', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92033660965b17f3408b009_25812695', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_170486621265b17f3405df93_46338794 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator stworzony przez Karolinę Kula<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_92033660965b17f3408b009_25812695 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
		<fieldset>
		
			<label for="id_k">Kwota kredytu o którą się ubiegasz </label>
			<input id="id_k" type="text" placeholder="" name="k" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->k;?>
" />
			<label for="id_b">Oprocentowanie kredytu w % </label>
			<input id="id_b" type="text" placeholder="" name="b" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->b;?>
" />
			<label for="id_n">Czas kredytowania w miesiącach </label>
			<input id="id_n" type="text" placeholder="" name="n" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->n;?>
" />
			<button type="submit" class="pure-button">Oblicz</button>
			
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
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
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
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
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->r)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->r;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}

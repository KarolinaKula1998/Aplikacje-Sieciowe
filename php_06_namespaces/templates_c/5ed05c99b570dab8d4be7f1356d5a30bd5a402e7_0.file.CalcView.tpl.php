<?php
/* Smarty version 3.1.30, created on 2024-01-25 23:09:41
  from "C:\Users\karol\OneDrive\Pulpit\Aplikacje Sieciowe\htdocs\php_06_namespaces\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65b2dc2586d770_85843690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ed05c99b570dab8d4be7f1356d5a30bd5a402e7' => 
    array (
      0 => 'C:\\Users\\karol\\OneDrive\\Pulpit\\Aplikacje Sieciowe\\htdocs\\php_06_namespaces\\app\\views\\CalcView.tpl',
      1 => 1706220578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_65b2dc2586d770_85843690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98675601065b2dc2585f267_36644740', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89255382765b2dc2586d364_26529967', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_98675601065b2dc2585f267_36644740 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator stworzony przez Karolinę Kula<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_89255382765b2dc2586d364_26529967 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Prosty kalkulator</h2>


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

	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages">


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

<?php
}
}
/* {/block 'content'} */
}

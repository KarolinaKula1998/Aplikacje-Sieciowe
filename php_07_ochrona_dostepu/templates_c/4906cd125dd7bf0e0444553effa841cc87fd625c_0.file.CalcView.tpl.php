<?php
/* Smarty version 3.1.30, created on 2024-01-25 23:20:30
  from "C:\Users\karol\OneDrive\Pulpit\Aplikacje Sieciowe\htdocs\php_07_ochrona_dostepu\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65b2deaecabe47_19329179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4906cd125dd7bf0e0444553effa841cc87fd625c' => 
    array (
      0 => 'C:\\Users\\karol\\OneDrive\\Pulpit\\Aplikacje Sieciowe\\htdocs\\php_07_ochrona_dostepu\\app\\views\\CalcView.tpl',
      1 => 1706221164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_65b2deaecabe47_19329179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18017103565b2deaecab9e3_79947017', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_18017103565b2deaecab9e3_79947017 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator kredytowy</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_k">Kwota kredytu o którą się ubiegasz </label>
			<input id="id_k" type="text" name="k" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->k;?>
" />
		</div>
        <div class="pure-control-group">
			<label for="id_b">Oprocentowanie kredytu w % </label>
			<input id="id_b" type="text" name="b" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->b;?>
" />
		</div>
        <div class="pure-control-group">
			<label for="id_n">Czas kredytowania w miesiącach </label>
			<input id="id_n" type="text" name="n" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->n;?>
" />
		</div>
		<div class="pure-controls">
			<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->r)) {?>
<div class="messages inf">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->r;?>

</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}

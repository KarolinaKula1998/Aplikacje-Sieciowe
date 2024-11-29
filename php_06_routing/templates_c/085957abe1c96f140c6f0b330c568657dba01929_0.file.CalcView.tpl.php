<?php
/* Smarty version 4.5.4, created on 2024-11-29 10:18:45
  from 'C:\xampp\htdocs\php_06_routing\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_674986f55cd7c2_90681486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '085957abe1c96f140c6f0b330c568657dba01929' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_routing\\app\\views\\CalcView.tpl',
      1 => 1732871921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_674986f55cd7c2_90681486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5926033674986f55c1f15_52347559', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_5926033674986f55c1f15_52347559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5926033674986f55c1f15_52347559',
  ),
);
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
calcCompute#app_content" method="post" class="pure-form pure-form-aligned bottom-margin">
<legend><strong> <span style='font-size: 24px;'>Kalkulator kredytowy</legend>
		<fieldset>
		<label for="kwota">Kwota kredytu o którą się ubiegasz </label>
		<input id="kwota" type="text" placeholder="kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">
		<label for="oprocentowanie">Oprocentowanie kredytu w % </label>
		<input id="oprocentowanie" type="text" placeholder="oprocentowanie" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
">
		<label for="okres">Czas kredytowania w miesiącach </label>
		<input id="okres" type="text" placeholder="okres" name="okres" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->okres;?>
">
		<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
		</fieldset>	
	</form>
	
	
	
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->rata))) {?>
<div class="messages info">
	<h4>Wynik</h4> 
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value->rata;?>

</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}

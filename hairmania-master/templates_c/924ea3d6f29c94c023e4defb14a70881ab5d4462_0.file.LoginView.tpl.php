<?php
/* Smarty version 3.1.30, created on 2024-12-30 17:33:16
  from "C:\xampp\htdocs\hairmania\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6772cb4c8ca241_90493493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '924ea3d6f29c94c023e4defb14a70881ab5d4462' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hairmania\\app\\views\\LoginView.tpl',
      1 => 1735576390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6772cb4c8ca241_90493493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7094161356772cb4c8c69e7_26534256', 'top');
?>

<?php echo '<?php
';?>phpinfo();
<?php echo '?>';
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_7094161356772cb4c8c69e7_26534256 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
		<legend>Logowanie do systemu</legend>
		<fieldset>
			<div class="pure-control-group">
				<label for="id_email">E-mail: </label>
				<input id="id_email" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" />
			</div>
			<div class="pure-control-group">
				<label for="id_pass">Hasło: </label>
				<input id="id_pass" type="password" name="pass" /><br />
			</div>
			<div class="pure-controls">
				<input type="submit" value="zaloguj" class="pure-button pure-button-primary" />
			</div>
		</fieldset>
	</form>
<?php
}
}
/* {/block 'top'} */
}

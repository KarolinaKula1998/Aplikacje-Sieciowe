<?php
/* Smarty version 3.1.30, created on 2025-01-03 11:34:21
  from "C:\xampp\htdocs\hairmania\app\views\UserList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6777bd2dee5656_35543491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f3cecb4dd117cbfb9cf30c647c9265840f7822' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hairmania\\app\\views\\UserList.tpl',
      1 => 1735900397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6777bd2dee5656_35543491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15970527416777bd2dedb282_11407783', 'styles');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18330605556777bd2dedc7c3_94783136', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14927905356777bd2dee5132_31515794', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'styles'} */
class Block_15970527416777bd2dedb282_11407783 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/user-list.css">
<?php
}
}
/* {/block 'styles'} */
/* {block 'top'} */
class Block_18330605556777bd2dedc7c3_94783136 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="bottom-margin">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userList">
			<legend>Opcje wyszukiwania</legend>
			<fieldset>
				<input type="text" placeholder="nazwisko" name="email" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->email;?>
" /><br />
				<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
			</fieldset>
		</form>
	</div>

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_14927905356777bd2dee5132_31515794 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<table class="pure-table pure-table-bordered users-table">
		<thead>
			<tr>
				<th>E-mail</th>
				<th>Rola</th>
				<th>Imię</th>
				<th>Nazwisko</th>
				<th>Telefon</th>
				<th>Data utworzenia</th>
				<th>Data modyfikacji</th>
				<th>Opcje</th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
				<tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value["email"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["role_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["phone_number"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["created_at"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["modified_at"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userEdit&id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userDelete&id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">Usuń</a></td></tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</tbody>
	</table>

<?php
}
}
/* {/block 'bottom'} */
}

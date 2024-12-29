<?php
/* Smarty version 3.1.30, created on 2024-12-29 12:18:20
  from "C:\xampp\htdocs\hairmania\app\views\UserList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67712ffc63d792_96311208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f3cecb4dd117cbfb9cf30c647c9265840f7822' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hairmania\\app\\views\\UserList.tpl',
      1 => 1735471065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_67712ffc63d792_96311208 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155590705267712ffc635262_52695579', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38086220167712ffc63d271_50672281', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_155590705267712ffc635262_52695579 extends Smarty_Internal_Block
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
class Block_38086220167712ffc63d271_50672281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<table id="tab_people" class="pure-table pure-table-bordered">
		<thead>
			<tr>
				<th>E-mail</th>
				<th>Rola</th>
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
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["role_id"];?>
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

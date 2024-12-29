<?php
/* Smarty version 3.1.30, created on 2024-12-29 10:38:54
  from "C:\xampp\htdocs\hairmania\app\views\PersonList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_677118ae9db011_17819946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce120ee1f7ab6c1ff71b4922a8c6401adb90d2dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hairmania\\app\\views\\PersonList.tpl',
      1 => 1735465130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_677118ae9db011_17819946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_510461864677118ae9d0bd7_65534335', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_629770979677118ae9dac15_01258432', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_510461864677118ae9d0bd7_65534335 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="bottom-margin">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList">
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
class Block_629770979677118ae9dac15_01258432 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="bottom-margin">
		<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personNew">+ Nowa osoba</a>
	</div>

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
personEdit&id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete&id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
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

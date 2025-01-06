<?php
/* Smarty version 3.1.30, created on 2024-12-30 18:25:35
  from "C:\xampp\htdocs\hairmania\app\views\UserEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6772d78f27e491_40998407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90026daae2b334d1ef473a99a971f1da386563dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hairmania\\app\\views\\UserEdit.tpl',
      1 => 1735579532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6772d78f27e491_40998407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1374539126772d78f27e099_90708402', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1374539126772d78f27e099_90708402 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="bottom-margin">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userSave" method="post" class="pure-form pure-form-aligned">
            <fieldset>
                <legend>Dane osoby</legend>
                <div class="pure-control-group">
                    <label for="id_email">E-mail</label>
                    <input id="id_email" type="text" placeholder="E-mail" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
">
                </div>
                <div class="pure-control-group">
                    <label for="id_name">Imię</label>
                    <input id="id_name" type="text" placeholder="Imię" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
                </div>
                <div class="pure-control-group">
                    <label for="id_surname">Nazwisko</label>
                    <input id="id_surname" type="text" placeholder="Nazwisko" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
">
                </div>
                <div class="pure-control-group">
                    <label for="id_phone">Telefon</label>
                    <input id="id_phone" type="text" placeholder="Telefon" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone;?>
">
                </div>
                <div class="pure-control-group">
                    <label for="roleId">Rola</label>
                    <select id="roleId" name="roleId">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
                <div class="pure-controls">
                    <input type="submit" class="pure-button pure-button-primary" value="Zapisz" />
                    <a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userList">Powrót</a>
                </div>
            </fieldset>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
        </form>
    </div>

<?php
}
}
/* {/block 'top'} */
}

<?php
/* Smarty version 3.1.30, created on 2024-12-30 17:47:37
  from "C:\xampp\htdocs\hairmania\app\views\Register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6772cea985a066_63686233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0690429d30642781ec09d0a51753c9c35ae45ed3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hairmania\\app\\views\\Register.tpl',
      1 => 1735577219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6772cea985a066_63686233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21277171296772cea9858170_14896534', 'top');
?>

<?php echo '<?php
';?>phpinfo();
<?php echo '?>';
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_21277171296772cea9858170_14896534 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post" class="pure-form pure-form-aligned bottom-margin">
        <legend>Rejestracja do systemu</legend>
        <fieldset>
            <div class="pure-control-group">
                <label for="id_name">Imię</label>
                <input id="id_name" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
" />
            </div>
            <div class="pure-control-group">
                <label for="id_surname">Nazwisko</label>
                <input id="id_surname" type="text" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
" />
            </div>
            <div class="pure-control-group">
                <label for="id_email">E-mail: </label>
                <input id="id_email" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">Hasło: </label>
                <input id="id_pass" type="password" name="pass" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_phone">Telefon</label>
                <input id="id_phone" type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone;?>
" />
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

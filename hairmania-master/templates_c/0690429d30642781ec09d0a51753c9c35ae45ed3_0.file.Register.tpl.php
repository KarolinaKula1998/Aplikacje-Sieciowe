<?php
/* Smarty version 3.1.30, created on 2024-12-16 18:51:25
  from "C:\xampp\htdocs\hairmania\app\views\Register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6760689d8f1047_24623609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0690429d30642781ec09d0a51753c9c35ae45ed3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hairmania\\app\\views\\Register.tpl',
      1 => 1734371451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6760689d8f1047_24623609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14174656446760689d8ef185_02787474', 'top');
?>

<?php echo '<?php
';?>phpinfo();
<?php echo '?>';
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_14174656446760689d8ef185_02787474 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post" class="pure-form pure-form-aligned bottom-margin">
        <legend>Rejestracja do systemu</legend>
        <fieldset>
            <div class="pure-control-group">
                <label for="id_login">login: </label>
                <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">pass: </label>
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

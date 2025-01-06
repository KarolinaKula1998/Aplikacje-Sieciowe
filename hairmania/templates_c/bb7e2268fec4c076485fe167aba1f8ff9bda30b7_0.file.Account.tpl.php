<?php
/* Smarty version 3.1.30, created on 2024-12-30 18:09:18
  from "C:\xampp\htdocs\hairmania\app\views\Account.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6772d3be706807_42091483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb7e2268fec4c076485fe167aba1f8ff9bda30b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hairmania\\app\\views\\Account.tpl',
      1 => 1735578556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6772d3be706807_42091483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8395589256772d3be7043e9_06101367', 'top');
?>

<?php echo '<?php
';?>phpinfo();
<?php echo '?>';
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_8395589256772d3be7043e9_06101367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Witaj <?php echo $_SESSION['user']['name'];?>
!
<?php
}
}
/* {/block 'top'} */
}

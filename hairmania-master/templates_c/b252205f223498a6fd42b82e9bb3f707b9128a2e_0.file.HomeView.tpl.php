<?php
/* Smarty version 3.1.30, created on 2025-01-03 11:07:14
  from "C:\xampp\htdocs\hairmania\app\views\HomeView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6777b6d2f3ade2_70977767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b252205f223498a6fd42b82e9bb3f707b9128a2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hairmania\\app\\views\\HomeView.tpl',
      1 => 1735898821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6777b6d2f3ade2_70977767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19983978796777b6d2f3a354_74200179', 'styles');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_776059576777b6d2f3ab33_25574491', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'styles'} */
class Block_19983978796777b6d2f3a354_74200179 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main-view.css">
<?php
}
}
/* {/block 'styles'} */
/* {block 'top'} */
class Block_776059576777b6d2f3ab33_25574491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="home-container">
        <div class="home-text-container main-color">
            <p><strong>Hej, witam Cię w świecie pięknych włosów!</strong></p>
            <p>Jeśli jeszcze nie masz konta zapraszam Cię do rejestracji!</p>
            <p>Jeśli zastanawiasz się nad zabiegiem, zapraszamy do kontaktu. Chętnie odpowiemy na wszystkie nurtujące Cię
                pytania i pomożemy dobrać zabieg, który spełni twoje oczekiwania.</p>

            <p>
                Zespół HairMania
                by Karolina Kula
            </p>
        </div>
    </div>
<?php
}
}
/* {/block 'top'} */
}

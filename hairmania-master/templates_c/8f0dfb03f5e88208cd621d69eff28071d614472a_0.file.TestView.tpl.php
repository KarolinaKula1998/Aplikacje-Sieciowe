<?php
/* Smarty version 3.1.30, created on 2025-01-03 13:40:39
  from "C:\xampp\htdocs\hairmania\app\views\TestView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6777dac768a511_87673622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f0dfb03f5e88208cd621d69eff28071d614472a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hairmania\\app\\views\\TestView.tpl',
      1 => 1735908037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6777dac768a511_87673622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10812369346777dac768a140_34182893', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_10812369346777dac768a140_34182893 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="" method="post" class="pure-form pure-form-aligned">
        <fieldset>
            <legend><?php echo $_smarty_tpl->tpl_vars['current_question']->value['name'];?>
</legend>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupedAnswers']->value[$_smarty_tpl->tpl_vars['current_question']->value['id']], 'answer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->value) {
?>
                <label>
                    <input type="radio" name="question_<?php echo $_smarty_tpl->tpl_vars['current_question']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['answer']->value['id'];?>
"
                        <?php if ($_smarty_tpl->tpl_vars['answer']->value['id'] == $_smarty_tpl->tpl_vars['selectedAnswerId']->value) {?>checked="checked" <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['answer']->value['answer_text'];?>

                </label><br>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            <div>
                <?php if ($_smarty_tpl->tpl_vars['current_question_index']->value > 0) {?>
                    <button type="submit" name="back" class="button-small pure-button">Wstecz</button>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['current_question_index']->value < $_smarty_tpl->tpl_vars['total_questions']->value-1) {?>
                    <button type="submit" name="next" class="button-small pure-button">Dalej</button>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['current_question_index']->value == $_smarty_tpl->tpl_vars['total_questions']->value-1) {?>
                    <button type="submit" name="save" class="button-small pure-button">Zapisz</button>
                <?php }?>
            </div>
        </fieldset>
    </form>
<?php
}
}
/* {/block 'top'} */
}

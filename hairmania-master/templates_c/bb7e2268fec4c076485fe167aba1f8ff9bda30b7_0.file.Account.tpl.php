<?php
/* Smarty version 3.1.30, created on 2025-01-12 11:57:01
  from "C:\xampp\htdocs\hairmania\app\views\Account.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67839ffdf31dd6_83046714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb7e2268fec4c076485fe167aba1f8ff9bda30b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hairmania\\app\\views\\Account.tpl',
      1 => 1736679419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_67839ffdf31dd6_83046714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165456754767839ffdf1ff70_25545280', 'styles');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116410770067839ffdf31720_63351089', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'styles'} */
class Block_165456754767839ffdf1ff70_25545280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/account.css">
<?php
}
}
/* {/block 'styles'} */
/* {block 'top'} */
class Block_116410770067839ffdf31720_63351089 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="account-container">
        <div class="account-container__content">
            <?php if ($_smarty_tpl->tpl_vars['currentView']->value == 'intro') {?>
                Witaj <?php echo $_SESSION['user']['name'];?>
!
                <div class="intro-view">
                    <h2>Wprowadzenie</h2>
                    <p>Tutaj znajdziesz podstawowe informacje na temat pielęgnacji włosów.</p>
                </div>

            <?php } elseif ($_smarty_tpl->tpl_vars['currentView']->value == 'hairplan') {?>
                <?php if (isset($_smarty_tpl->tpl_vars['currentPlan']->value) && !empty($_smarty_tpl->tpl_vars['currentPlan']->value)) {?>
                    <p>Twoje włosy są:</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['currentPlan']->value['porosity_name'];?>
</p>
                    <?php if ($_smarty_tpl->tpl_vars['currentPlan']->value['porosity_type_id'] == 1) {?>
                        <h4>1. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>2. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>3. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>4. MYCIE</h4>
                        <ul>
                            <li>Nakładamy olej do olejowania na włosy - trzymamy przez godzinę.</li>
                            <li>Myjemy skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>5. MYCIE</h4>
                        <ul>
                            <li>Nakładamy peeling na skórę głowy - spłukujemy.</li>
                            <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę proteinową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <p><strong>WAŻNE:</strong> Nie chodzimy spać w mokrych włosach. Włosy suszymy chłodnym lub letnim nawiewem. Do
                            spania
                            związujemy włosy, np. w delikatnego kucyka.</p>

                    <?php } elseif ($_smarty_tpl->tpl_vars['currentPlan']->value['porosity_type_id'] == 2) {?>
                        <h4>1. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>2. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>3. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>4. MYCIE</h4>
                        <ul>
                            <li>Nakładamy olej do olejowania na włosy - trzymamy przez godzinę.</li>
                            <li>Myjemy skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>5. MYCIE</h4>
                        <ul>
                            <li>Nakładamy peeling na skórę głowy - spłukujemy.</li>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę proteinową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <p><strong>WAŻNE:</strong> Nie chodzimy spać w mokrych włosach. Włosy suszymy chłodnym lub letnim nawiewem. Do
                            spania
                            związujemy włosy, np. w delikatnego kucyka.</p>

                    <?php } elseif ($_smarty_tpl->tpl_vars['currentPlan']->value['porosity_type_id'] == 3) {?>
                        <h4>1. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>2. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>3. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>4. MYCIE</h4>
                        <ul>
                            <li>Nakładamy olej do olejowania na włosy - trzymamy przez godzinę.</li>
                            <li>Myjemy skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>5. MYCIE</h4>
                        <ul>
                            <li>Nakładamy peeling na skórę głowy - spłukujemy.</li>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę proteinową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <p><strong>WAŻNE:</strong> Nie chodzimy spać w mokrych włosach. Włosy suszymy chłodnym lub letnim nawiewem. Do
                            spania
                            związujemy włosy, np. w delikatnego kucyka.</p>
                    <?php }?>
                <?php } else { ?>
                    <div class="no-results-message">
                        <p>Nie masz jeszcze aktualnego planu.</p>
                        <a class="button-small pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
testShow">Przejdź do testów</a>
                    </div>
                <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['currentView']->value == 'results') {?>
                <!-- Widok wyników -->
                <?php if (empty($_smarty_tpl->tpl_vars['records']->value)) {?>
                    <div class="no-results-message">
                        <p>Nie masz jeszcze żadnych wyników.</p>
                        <a class="button-small pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
testShow">Przejdź do testów</a>
                    </div>
                <?php } else { ?>
                    <table class="pure-table pure-table-bordered users-table">
                        <thead>
                            <tr>
                                <th>Typ</th>
                                <th>Wynik</th>
                                <th>Data utworzenia</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["porosity_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["score_result"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["created_at"];?>
</td><td><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
resultDelete&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">Usuń</a></td></tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['currentView']->value == 'products') {?>
                <!-- Widok produktów -->
                <div class="products-view">
                    <h2>Produkty</h2>
                    <p>Tutaj znajdziesz polecane produkty do pielęgnacji włosów.</p>
                </div>
            <?php }?>
        </div>
        <div class="account-container__menu">
            <div class="account-menu">
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountShow&view=intro" <?php if ($_smarty_tpl->tpl_vars['currentView']->value == 'intro') {?>class="active"
                        <?php }?>>Wprowadzenie</a></p>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountShow&view=hairplan" <?php if ($_smarty_tpl->tpl_vars['currentView']->value == 'hairplan') {?>class="active"
                        <?php }?>>Aktualny plan</a></p>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountShow&view=products" <?php if ($_smarty_tpl->tpl_vars['currentView']->value == 'products') {?>class="active"
                        <?php }?>>Twoje produkty</a></p>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountShow&view=results" <?php if ($_smarty_tpl->tpl_vars['currentView']->value == 'results') {?>class="active"
                        <?php }?>>Wyniki</a></p>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'top'} */
}

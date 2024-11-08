<?php
/* Smarty version 4.5.4, created on 2024-11-08 20:35:08
  from 'C:\xampp\htdocs\php_04_smarty_syablon\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_672e67ec463839_94956151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdf50f76ef00697e4ca3dfdb6dbbb866b4c809c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_smarty_syablon\\templates\\main.html',
      1 => 1731092320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672e67ec463839_94956151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>

    <link
      rel="stylesheet"
      href="http://yui.yahooapis.com/pure/0.4.2/pure.css"
    />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main.css" />
    <noscript
      ><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/noscript.css"
    /></noscript>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css" />
    <?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style_hide_intro.css" />
    <?php }?>

    <link
      rel="stylesheet"
      href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
    />

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/softscroll.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div id="app_top" class="header">
      <div
        class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed head-menu navbar"
      >
        <a class="pure-menu-heading" href=""
          ><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</a
        >

        <ul>
          <li><a href="#app_top">Góra strony</a></li>
          <li><a href="#app_content">Idź do formularza</a></li>
        </ul>
      </div>
    </div>

    <section id="banner">
      <div class="content">
        <header>
          <h2>Witaj w symulacji kredytowej</h2>
          <p>Oblicz swoją przewidywaną ratę kredytu.</p>
        </header>
        <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/cash.jpg" alt="" /></span>
      </div>
      <a href="#one" class="goto-next scrolly">Next</a>
    </section>

    <div class="content-wrapper">
      <div id="app_content" class="content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1749044364672e67ec4626c7_07263377', 'content');
?>

      </div>
    </div>
    <section id="five" class="wrapper style2 special fade">
      <div class="container">
        <header>
          <h2></h2>
          <p>Kalkulator stworzony przez Karolinę Kula</p>
        </header>
      </div>
    </section>

    <footer id="footer">
      <ul class="icons">
        <li>
          <a href="#" class="icon brands alt fa-github"
            ><span class="label">GitHub</span></a
          >
        </li>
      </ul>
    </footer>
  </body>
</html>
<?php }
/* {block 'content'} */
class Block_1749044364672e67ec4626c7_07263377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1749044364672e67ec4626c7_07263377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}

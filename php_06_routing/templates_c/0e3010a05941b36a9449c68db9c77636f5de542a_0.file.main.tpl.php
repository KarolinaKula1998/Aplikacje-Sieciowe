<?php
/* Smarty version 4.5.4, created on 2024-11-29 10:17:26
  from 'C:\xampp\htdocs\php_06_routing\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_674986a6ece534_28824339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e3010a05941b36a9449c68db9c77636f5de542a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_routing\\app\\views\\templates\\main.tpl',
      1 => 1732862085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674986a6ece534_28824339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl"
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css" />
    <noscript
      ><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/noscript.css"
    /></noscript>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" />

    <link
      rel="stylesheet"
      href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
    />

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
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
        <span class="image"
          ><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/cash.jpg" alt=""
        /></span>
      </div>
      <a href="#one" class="goto-next scrolly">Next</a>
    </section>

    <div class="content-wrapper">
      <div id="app_content" class="content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_639878166674986a6ecd320_19378179', 'content');
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
</html><?php }
/* {block 'content'} */
class Block_639878166674986a6ecd320_19378179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_639878166674986a6ecd320_19378179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}

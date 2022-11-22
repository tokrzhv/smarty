<?php
/* Smarty version 3.1.32, created on 2018-10-24 16:48:14
  from 'D:\OpenServer\domains\smarty\admin\templates\add_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd0781e9d5193_13602707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca9e14e5f95689f45ca9d3fb5907e1a64433d29f' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\admin\\templates\\add_cat.tpl',
      1 => 1540388891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd0781e9d5193_13602707 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="index.php">Back</a>
    <h1>Добавление</h1>
    <form method="post" action="add_cat.php">
        <input type="text" name="model" placeholder="add model">
        <input type="submit" name="send">
    </form>
<?php }
}

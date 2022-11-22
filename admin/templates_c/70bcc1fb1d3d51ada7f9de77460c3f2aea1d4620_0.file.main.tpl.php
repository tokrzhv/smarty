<?php
/* Smarty version 3.1.32, created on 2018-11-06 18:39:24
  from 'D:\OpenServer\domains\smarty\admin\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be1b5ac5b5828_83820745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70bcc1fb1d3d51ada7f9de77460c3f2aea1d4620' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\admin\\templates\\main.tpl',
      1 => 1541518764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be1b5ac5b5828_83820745 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2><a href="index.php"> << </a> /Admin часть</h2>
<div>
    <?php if (isset($_smarty_tpl->tpl_vars['username']->value) && isset($_smarty_tpl->tpl_vars['userawatar']->value) && isset($_smarty_tpl->tpl_vars['userprava']->value)) {?>
        <div id="login">
            <h1><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h1>
            <?php $_prefixVariable1 = 1;
$_smarty_tpl->_assignInScope('prava', $_prefixVariable1);
if ($_prefixVariable1) {?> <h3>Admin</h3>
            <?php } else { ?> <h3>Operator</h3><?php }?>
            <img src="/images/<?php echo $_smarty_tpl->tpl_vars['userawatar']->value;?>
">
            <a href="exit.php" style="font-size: 20px">Exit</a>
        </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
        <div id="add">
            <h2>Добавление товара:</h2>
            <ul>
                <li><a href="add_items.php">Add item</a></li>
                <li><a href="add_cat.php">Add categories</a></li>
            </ul></div>
        <div id="update">
            <h2>Управление:</h2>
            <ul>
                <li><a href="index_items.php">Items</a></li>
                <li><a href="index_cat.php">Cat</a></li>
            </ul></div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['userprava']->value) && $_smarty_tpl->tpl_vars['userprava']->value == 1) {?>
        <div id="add_admin">
            <h2>Регистрация:</h2>
            <ul>
                <li><a href="add_admin.php">Add admin/operator</a></li>
            </ul>
        </div>
    <?php }?>
    <div id="korzina">
        <h2>Корзина:</h2>
        <ul>
            <li><a href="arhiv.php">Архив</a></li>
            <li><a href="zakaz.php">Заказы</a></li>
        </ul>
    </div>
</div>
<div id="content">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>

<div>
    <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

</div>
</body>
</html><?php }
}

<?php
/* Smarty version 3.1.32, created on 2018-06-01 15:15:12
  from 'D:\OpenServer\domains\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1138d0c62169_35639441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f91546d13d9a15e26a0491342443c476b989713e' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\templates\\index.tpl',
      1 => 1527855312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1138d0c62169_35639441 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>Проект SMARTY </h1>
</header>
<div id="main">
    <div id="menu">
        <ul>
            <li><a href="index.php">Главная </a></li>
            <li><a href="contact.php">Контакт</a></li>
        </ul>
    </div>
    <div id="content">
        <?php echo $_smarty_tpl->tpl_vars['privet']->value;?>
<br>
        <h3>Оценка полученая студентом - <?php echo $_smarty_tpl->tpl_vars['ball']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['ball']->value == 5) {?>
            Молодец
            <?php } elseif ($_smarty_tpl->tpl_vars['ball']->value == 2) {?>
            Плохо
            <?php } else { ?>
            Норм
        <?php }?>
        </h3>
    </div>
</div>
<footer>
    &copy; Сергей Токаржевский 2018
</footer>
</body>
</html><?php }
}

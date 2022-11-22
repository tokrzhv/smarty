<?php
/* Smarty version 3.1.32, created on 2018-10-24 16:40:57
  from 'D:\OpenServer\domains\smarty\admin\templates\del_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd076690a0f79_58771210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bace42312692993f2f130a21f98a1e9b6a273290' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\admin\\templates\\del_cat.tpl',
      1 => 1540332210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd076690a0f79_58771210 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<h2>вы действительно хотите удалить <?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</h2>
<form name="del" action="del_cat.php" method="post">
    <p>Да</p>
    <input type="radio" name="del" checked value="yes">
    <p>Нет</p>
    <input type="radio" name="del" value="no">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Подтвердить">
</form>
</body>
</html><?php }
}

<?php
/* Smarty version 3.1.32, created on 2018-06-20 13:13:13
  from 'D:\OpenServer\domains\smarty\templates\colk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2a28b9925ba4_94987085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b6c4eb308f116c3fd149d5b74ae7b1dc320c207' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\templates\\colk.tpl',
      1 => 1529488818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2a28b9925ba4_94987085 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Калькулятор</h1>
</header>

 <div id="content">
     <form method="post" action="colk.php">
         <input type="number" name="number1" <?php if (isset($_smarty_tpl->tpl_vars['n1']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['n1']->value;?>
" <?php } else { ?> placeholder="add number1" <?php }?>    >
         <input type="number" name="number2" <?php if (isset($_smarty_tpl->tpl_vars['n2']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['n2']->value;?>
" <?php } else { ?> placeholder="add number2" <?php }?>>
         <input type="submit" name="add" value="+">
         <input type="submit" name="add" value="-">
         <input type="submit" name="add" value="*">
         <input type="submit" name="add" value="/">
         <input type="submit" name="add" value="^">
     </form>
     <p> <?php if (isset($_smarty_tpl->tpl_vars['add']->value)) {?> Результат = <?php echo $_smarty_tpl->tpl_vars['var']->value;?>
  <?php }?>  </p>
 </div>
</body>
</html><?php }
}

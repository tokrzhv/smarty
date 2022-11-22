<?php
/* Smarty version 3.1.32, created on 2018-10-08 16:39:48
  from 'D:\OpenServer\domains\smarty\admin\templates\del_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbb5e245eee77_15713404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26dfe6312792241ecc612b47d645345f1bf0d4b0' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\admin\\templates\\del_item.tpl',
      1 => 1539005987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbb5e245eee77_15713404 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>вы действительно хотите удалить <?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</h2>
<form name="delf" action="del_item.php" method="post">
    <p>Да</p>
    <input type="radio" name="del" checked value="yes">
    <p>Нет</p>
    <input type="radio" name="del" value="no">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><br>
    <input type="submit" name="send" value="Подтвердить">
</form><?php }
}

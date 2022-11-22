<?php
/* Smarty version 3.1.32, created on 2018-09-12 20:43:42
  from 'D:\OpenServer\domains\smarty\admin\del_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b99504e0e2207_82270280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c41a8154c3353ff1f7067e91a29a9678f5f45913' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\admin\\del_cat.tpl',
      1 => 1536774069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b99504e0e2207_82270280 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>вы действительно хотите удалить <?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</h2>
<form name="del" action="del_cat.php" method="post">
    <p>Да</p>
    <input type="radio" name="del" checked value="yes">
    <p>Нет</p>
    <input type="radio" name="del" value="no">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Подтвердить">
</form><?php }
}

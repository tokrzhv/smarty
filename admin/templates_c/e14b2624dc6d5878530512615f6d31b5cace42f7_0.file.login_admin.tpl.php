<?php
/* Smarty version 3.1.32, created on 2019-03-10 17:07:14
  from 'D:\Program\OpenServer\domains\smarty\admin\templates\login_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c851a12acd347_81768498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e14b2624dc6d5878530512615f6d31b5cace42f7' => 
    array (
      0 => 'D:\\Program\\OpenServer\\domains\\smarty\\admin\\templates\\login_admin.tpl',
      1 => 1540388996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c851a12acd347_81768498 (Smarty_Internal_Template $_smarty_tpl) {
?><form name="login" action="login_admin.php" enctype="multipart/form-data" method="post">
    <h2>Add your login</h2>
    <input type="text" name="login">
    <h2>Add your password</h2>
    <input type="password" name="pass"><br>
    <input type="submit" name="send">
</form>


<?php }
}

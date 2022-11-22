<?php
/* Smarty version 3.1.32, created on 2018-10-24 16:54:52
  from 'D:\OpenServer\domains\smarty\admin\templates\login_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd079ac6187e6_15789625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4b0c38ed45144d421d76da4d8e93f2b516a036a' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\admin\\templates\\login_admin.tpl',
      1 => 1540388996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd079ac6187e6_15789625 (Smarty_Internal_Template $_smarty_tpl) {
?><form name="login" action="login_admin.php" enctype="multipart/form-data" method="post">
    <h2>Add your login</h2>
    <input type="text" name="login">
    <h2>Add your password</h2>
    <input type="password" name="pass"><br>
    <input type="submit" name="send">
</form>


<?php }
}

<?php
/* Smarty version 3.1.32, created on 2019-03-15 00:57:29
  from 'D:\Program\OpenServer\domains\smarty\admin\templates\add_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c8ace49039920_73131344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b8eaf6c2631cdfd0bc2cf79e41bc65548540843' => 
    array (
      0 => 'D:\\Program\\OpenServer\\domains\\smarty\\admin\\templates\\add_admin.tpl',
      1 => 1540388996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8ace49039920_73131344 (Smarty_Internal_Template $_smarty_tpl) {
?><form enctype="multipart/form-data" method="post" action="add_admin.php">
    <h2>ADD your name</h2>
    <input type="text" name="namme">
    <h2>ADD awatar</h2>
    <input type="file" name="awatar">
    <h2>ADD your login</h2>
    <input type="text" name="login">
    <h2>ADD PASSWORD</h2>
    <input type="password" name="password">
    <h2>ADD PASSWORD</h2>
    <input type="password" name="password2"><br>
    <hr>
    <input type="email" name="email" placeholder="email"><br>
    <input type="tel" name="tel" placeholder="tel"><br>
    <select name="prava">
        <option selected value="1" name="prava">Admin</option>
        <option value="2">Operator</option>
    </select><br>
    <input type="submit" name="send"><br>
</form><?php }
}

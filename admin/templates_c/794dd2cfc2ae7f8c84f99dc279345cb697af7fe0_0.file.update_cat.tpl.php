<?php
/* Smarty version 3.1.32, created on 2018-10-24 16:40:51
  from 'D:\OpenServer\domains\smarty\admin\templates\update_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd0766370f717_25253827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '794dd2cfc2ae7f8c84f99dc279345cb697af7fe0' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\admin\\templates\\update_cat.tpl',
      1 => 1540387833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd0766370f717_25253827 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="form">
    <form method="post" action="update_cat.php" name="cat">
        <h1>Update MODEL</h1>
        <input type="text" name="cat" value="<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <input type="submit" name="send" placeholder="send">
    </form>
</div>


<?php }
}

<?php
/* Smarty version 3.1.32, created on 2018-10-24 16:49:57
  from 'D:\OpenServer\domains\smarty\admin\templates\update_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd078858da2f7_72572196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a355c973d47fa77df09e6237bdf40ba0101cdf91' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\admin\\templates\\update_page.tpl',
      1 => 1540388996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd078858da2f7_72572196 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="update_page.php">
    <h3>Редактирование meta_title</h3>
  <textarea name="meta_title"><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</textarea>

    <h3>Редактирование meta_keywords</h3>
      <textarea name="meta_keywords"><?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
</textarea><br>

            <h3>Редактирование meta_description</h3>
    <textarea name="meta_description"><?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
</textarea><br>

            <h3>Редактирование title</h3>
    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><br>
            <h3>Редактирование content</h3>

            <textarea name="content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" >
</form><?php }
}
